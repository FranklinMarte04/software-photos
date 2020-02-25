<?php
/*para ver error del codigo debunng*/
ini_set('display_errors', 'On');


require_once('conexion.php');
if ($_REQUEST) {

    $tarjeta = $_REQUEST['CreditCardNumber'];
    $respuesta = $_REQUEST['ResponseCode'];
    $transaccion = $_REQUEST['TransactionID'];
    $codigoautorizacion = $_REQUEST['AuthorizationCode'];
    $referencia = $_REQUEST['RetrivalReferenceNumber'];
    $ordenid = $_REQUEST['OrdenId'];
    $fecha = date('Y-m-d H:i:s');

    $querylog="INSERT INTO log_carnet(logtext,fecha)VALUES('".json_encode($_REQUEST)."',NOW())";
    conectar($querylog);

    $query = "INSERT INTO ipn_cardnet
            (creditcardnumber,responsecode,codigo_cliente,retrievalreferencenumber,ordenid,transaction_date,codigoautorizacion)
            VALUES('$tarjeta','$respuesta','$transaccion','$referencia','$ordenid','$fecha','{$codigoautorizacion}')";
    conectar($query);

    $cl_tipo_vt = "SELECT * FROM venta WHERE codigo_cliente='$transaccion'";
    $resultado_tipo_vt = conectar($cl_tipo_vt);
    $fila_tipo = mysqli_fetch_array($resultado_tipo_vt);

   /*primera condicion*/
    if ($respuesta =="00" AND $fila_tipo['tipo_venta'] == "PAQUETES ATRACCIONES") {

        $update = "UPDATE venta SET estado='VERIFICADO',metodo_pago='CARDNET' WHERE codigo_cliente='$transaccion'";
        conectar($update);

        $consulta_r = "SELECT MAX(numero_reserva)+1 as numero_reserva FROM reservas";
        $resultado_r = conectar($consulta_r);
        $row_r = mysqli_fetch_array($resultado_r);
        $codigo = $row_r['numero_reserva'];

        $query = "UPDATE reservas SET numero_reserva='$codigo' WHERE codigo_cliente='$transaccion'";
        conectar($query);

        $consulta_vt = "SELECT vt.fecha_compra,vt.monto_total,vt.descuento_total,vt.subtotal,
dc.cantidad_adulto,dc.cantidad_nino,dc.descripcion,dc.paquete,dc.subtotal as subtotal_det
FROM venta AS vt INNER JOIN detalle_compra AS dc ON vt.codigo_cliente=dc.codigo_cliente
WHERE vt.codigo_cliente='$transaccion'";
        $resultado_vt = conectar($consulta_vt);
        $detalle_dt = "";
        while ($fila_vt = mysqli_fetch_array($resultado_vt)) {

            $subtotal = $fila_vt["subtotal"];
            $descuento_total = $fila_vt["descuento_total"];
            $monto_total = $fila_vt["monto_total"];
            $detalle_dt.="
<tr>
<td class='bold'>" . $fila_vt["paquete"] . "</td>
                           <td>" . $fila_vt["descripcion"] . "</td>
                           <td>" . $fila_vt["cantidad_adulto"] . "</td>
                           <td>" . $fila_vt["cantidad_nino"] . "</td>
                           <td>" . $fila_vt["subtotal_det"] . "</td>
            </tr>
                  ";
        }

        $consuta_cl = "SELECT cl.nombre,cl.apellido,cl.email,cl.telefono, vt.fecha_compra,vt.monto_total,vt.descuento_total,vt.subtotal,rv.fecha_reserva,rv.habitacion,rv.hotel,
dc.cantidad_adulto,dc.cantidad_nino,dc.descripcion,dc.paquete,dc.subtotal as subtotal_det
FROM venta AS vt INNER JOIN clientes as cl ON cl.codigo_cliente=vt.codigo_cliente INNER JOIN detalle_compra AS dc ON vt.codigo_cliente=dc.codigo_cliente INNER JOIN
reservas as rv  ON rv.codigo_cliente=vt.codigo_cliente
WHERE vt.codigo_cliente='$transaccion'";
        $resultado_cl = conectar($consuta_cl);
        $fila_cl = mysqli_fetch_array($resultado_cl);

        $email_cl = $fila_cl["email"];

        /* Email de factura que se le envia al cliente */
        $mailto ="".$email_cl.",operaciones@bavaroadventurepark.com,asistconta3@bavaroadventurepark.com,avictoria@bavaroadventurepark.com,directoroperaciones@bavaroadventurepark.com,gerenciafinanciera@bavaroadventurepark.com";

        $mailsubj = "Reserva Realizada y Pagada CARDNET";
        $mailhead = "From:webmaster@bavaroadventurepark.com\r\n";
        $mailhead .= "Content-type: text/html\r\n";

        $mailbody = "
<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=938 style='width:50%;mso-cellspacing:0cm;background:white;border:solid #18962e 6.0pt;

 mso-yfti-tbllook:1184;mso-padding-alt:0cm 0cm 0cm 0cm'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
      <td style='padding:6.75pt 6.75pt 6.75pt 6.75pt'>
         <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 style='mso-cellspacing:0cm;mso-yfti-tbllook:1184;mso-padding-alt:0cm 0cm 0cm 0cm'>
            <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
               <td style='padding:0cm 0cm 11.25pt 0cm'>
                  <p class=MsoNormal><span style='font-size:9.0pt;font-family:' Arial ','sans-serif ';color:black'><a href='http://www.bavaroadventurepark.com'></a><a href='http://www.bavaroadventurepark.com'><span style='text-decoration:none;text-underline:none'><img border='0'   id='_x0000_i1029' src='http://bavaroadventurepark.com/public/img/logo.png'/></span></a>
                     <o:p></o:p>
                     </span>
                  </p>
               </td>
               <td width='100%' valign=top style='width:100.0%;padding:0cm 0cm 11.25pt 0cm'>
                  <div align=center>
                     <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 style='mso-cellspacing:0cm;mso-yfti-tbllook:1184;mso-padding-alt:0cm 0cm 0cm 0cm'>
                        <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
                           <td style='padding:22.5pt 0cm 12.0pt 0cm'>

                              <p class=MsoNormal><b><span style='font-size:18.0pt;font-family:'Arial','sans-serif';


      color:#80c000'>Payment Invoice

            <o:p></o:p></span></b></p>
                           </td>
                        </tr>
                     </table>
                  </div>
               </td>
            </tr>
         </table>
         <p class=MsoNormal><span style='font-size:9.0pt;font-family:' Arial ','sans-serif ';

  color:black;display:none;mso-hide:all'><o:p>&nbsp;</o:p></span></p>
         <p class=MsoNormal><span style='mso-fareast-font-family:' Times New Roman ';

  color:windowtext'><o:p></o:p></span></p>
         <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width='100%'
         style='width:100.0%;mso-cellspacing:0cm;mso-yfti-tbllook:1184;mso-padding-alt:

   0cm 0cm 0cm 0cm'>
            <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
               <td style='padding:0cm 5.25pt 0cm 5.25pt'>
                  <style>
                     table th {
                     background: #18962e;
                     height: 36px;
                     line-height: 14px;
                     color: #fff;
                     text-transform: uppercase;
                     font-size: 10px;
                     text-align: left;
                     padding-left: 8px;
                     vertical-align: middle;
                     border-bottom: 2px solid #0c641b;
                  }

                  table td {
                     text-align: left;
                     font-size: 12px;
                     padding-left: 8px;
                     height: 33px;
                     line-height: 14px;
                     border-left: 1px solid #fff;
                     vertical-align: middle;
                  }
                  </style>

                  <table>
                     <tbody>
                        <tr>
                           <th colspan='6'>PERSONAL INFORMATION</th>
                        </tr>
                        <tr>
                           <td ><strong>Full Name:</strong></td>
                           <td >" . $fila_cl['nombre'] . " " . $fila_cl['apellido'] . "</td>
                          <td ><strong>Date of Visit:</strong></td>
                           <td>" . date('d-m-Y', strtotime($fila_cl['fecha_reserva'])) . "</td>




                        </tr>
                        <tr>
                            <td ><strong>E-mail:</strong></td>
                           <td>" . $fila_cl['email'] . "</td>
                           <td ><strong>Telefono:</strong></td>
                           <td>" . $fila_cl['telefono'] . "</td>

                        </tr>
                        <tr>
                           <td ><strong>Room No.:</strong></td>
                           <td >" . $fila_cl['habitacion'] . "</td>
                          <td ><strong>Hotel:</strong></td>
                           <td>" . $fila_cl['hotel'] . "</td>




                        </tr>

                        <tr>
                           <th width='20%' >PACKAGE</th>
                           <th width='75%'>DESCRIPTION</th>
                             <th width='15%'>Adultos</th>
                            <th width='15%'>Ni&ntilde;os</th>

                           <th width='15%'>SUBTOTAL</th>

                        </tr>

                          " . $detalle_dt . "

                        <tr>

                              <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><strong>SubTotal:</strong></td>
                           <td>" . $subtotal . "</td>
                        </tr>

                        <tr>

                             <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><strong>Discount:</strong></td>
                           <td>" . $descuento_total . "</td>
                        </tr>
                        <tr>

                             <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><strong>Total:</strong></td>
                           <td><strong>" . $monto_total . "</strong></td>
                        </tr>
                        <tr> </tr>
                     </tbody>
                  </table>

                  <strong>Phones: </strong>
<ul><li>809-933-3040809-475-7555 Main Number</li>
<li>809-349-9555 Toll Free- Santo Domingo</li>
<li>809-612-7879 Toll Free-La Romana</li>
</ul>



<p><strong>Notes:</strong></p>
<ul>
<li>You can change the attractions upon arrival</li>
<li>Taxes and fees are included in our total Price</li>
<li>Bavaro Adventure Park does not charge any Administration fee or other charge</li>
</ul>
<p><strong>Cancellation Policy:</strong></p>
<ul>
<li>Cancellation for free up to 7 days before arrival</li>
<li>From 7 days to 1 day will be applied 50%</li>
<li>24 hours before arrival will be applied 100%</li>
<li>1 Date change for free</li>
<li>1 Reservation holder name for free</li>
</ul>

<hr>
<p>Copyright 2018 Bavaroadventurepark.com. All rights reserved.
This email was sent from Bavaroadventurepark.com,Punta Cana, Dominican Republic</p>
";


        mail($mailto, $mailsubj, $mailbody, $mailhead);
        $eliminar = "DELETE FROM ci_sessions";
        conectar($eliminar);
        header("Location: http://www.bavaroadventurepark.com/view/confirmacion_pago");
    }elseif($respuesta == "00" AND $fila_tipo['tipo_venta'] == "PAQUETES FOTOS") {



        $update = "UPDATE venta SET estado='VERIFICADO',metodo_pago='CARDNET' WHERE codigo_cliente='$transaccion'";
        conectar($update);

        $consulta_vt = "SELECT vt.fecha_compra,vt.monto_total,vt.descuento_total,vt.subtotal,
dc.cantidad_adulto,dc.cantidad_nino,dc.descripcion,dc.paquete,dc.subtotal as subtotal_det
FROM venta AS vt INNER JOIN detalle_compra AS dc ON vt.codigo_cliente=dc.codigo_cliente
WHERE vt.codigo_cliente='$transaccion'";
        $resultado_vt = conectar($consulta_vt);
        $detalle_dt = "";
        while ($fila_vt = mysqli_fetch_array($resultado_vt)) {

            $subtotal = $fila_vt["subtotal"];
            $descuento_total = $fila_vt["descuento_total"];
            $monto_total = $fila_vt["monto_total"];
            $detalle_dt.="
<tr>
<td class='bold'>" . $fila_vt["paquete"] . "</td>
                           <td>" . $fila_vt["descripcion"] . "</td>
                           <td></td>
                           <td>" . $fila_vt["subtotal_det"] . "</td>
            </tr>
                  ";
        }

        $consuta_cl = "SELECT cl.nombre,cl.apellido,cl.email,cl.telefono,vt.fecha_compra,vt.monto_total,vt.descuento_total,vt.subtotal,dc.cantidad_adulto,dc.cantidad_nino,dc.descripcion,dc.paquete,dc.subtotal as subtotal_det
FROM venta AS vt INNER JOIN clientes as cl ON cl.codigo_cliente=vt.codigo_cliente INNER JOIN detalle_compra AS dc ON vt.codigo_cliente=dc.codigo_cliente
WHERE vt.codigo_cliente='$transaccion'";
        $resultado_cl = conectar($consuta_cl);
        $fila_cl = mysqli_fetch_array($resultado_cl);

        $email_cl = $fila_cl["email"];

        /* Email de factura que se le envia al cliente */
        $mailto ="".$email_cl.",phototeam@bavaroadventurepark.com,asistconta3@bavaroadventurepark.com,gerenciafinanciera@bavaroadventurepark.com,asistconta5@bavaroadventurepark.com";
    $mailsubj = "Pago de Paquete de Fotos CARDNET";
        $mailhead = "From:webmaster@bavaroadventurepark.com\r\n";
        $mailhead .= "Content-type: text/html\r\n";

        $mailbody = "
<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=938 style='width:50%;mso-cellspacing:0cm;background:white;border:solid #18962e 6.0pt;

 mso-yfti-tbllook:1184;mso-padding-alt:0cm 0cm 0cm 0cm'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
      <td style='padding:6.75pt 6.75pt 6.75pt 6.75pt'>
         <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 style='mso-cellspacing:0cm;mso-yfti-tbllook:1184;mso-padding-alt:0cm 0cm 0cm 0cm'>
            <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
               <td style='padding:0cm 0cm 11.25pt 0cm'>
                  <p class=MsoNormal><span style='font-size:9.0pt;font-family:' Arial ','sans-serif ';color:black'><a href='http://www.bavaroadventurepark.com'></a><a href='http://www.bavaroadventurepark.com'><span style='text-decoration:none;text-underline:none'><img border='0'   id='_x0000_i1029' src='http://bavaroadventurepark.com/public/img/logo.png'/></span></a>
                     <o:p></o:p>
                     </span>
                  </p>
               </td>
               <td width='100%' valign=top style='width:100.0%;padding:0cm 0cm 11.25pt 0cm'>
                  <div align=center>
                     <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 style='mso-cellspacing:0cm;mso-yfti-tbllook:1184;mso-padding-alt:0cm 0cm 0cm 0cm'>
                        <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
                           <td style='padding:22.5pt 0cm 12.0pt 0cm'>

                              <p class=MsoNormal><b><span style='font-size:18.0pt;font-family:'Arial','sans-serif';


      color:#80c000'>Payment Invoice

            <o:p></o:p></span></b></p>
                           </td>
                        </tr>
                     </table>
                  </div>
               </td>
            </tr>
         </table>
         <p class=MsoNormal><span style='font-size:9.0pt;font-family:' Arial ','sans-serif ';

  color:black;display:none;mso-hide:all'><o:p>&nbsp;</o:p></span></p>
         <p class=MsoNormal><span style='mso-fareast-font-family:' Times New Roman ';

  color:windowtext'><o:p></o:p></span></p>
         <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width='100%'
         style='width:100.0%;mso-cellspacing:0cm;mso-yfti-tbllook:1184;mso-padding-alt:

   0cm 0cm 0cm 0cm'>
            <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
               <td style='padding:0cm 5.25pt 0cm 5.25pt'>
                  <style>
                     table th {
                     background: #18962e;
                     height: 36px;
                     line-height: 14px;
                     color: #fff;
                     text-transform: uppercase;
                     font-size: 10px;
                     text-align: left;
                     padding-left: 8px;
                     vertical-align: middle;
                     border-bottom: 2px solid #0c641b;
                  }

                  table td {
                     text-align: left;
                     font-size: 12px;
                     padding-left: 8px;
                     height: 33px;
                     line-height: 14px;
                     border-left: 1px solid #fff;
                     vertical-align: middle;
                  }
                  </style>

                   <table>
                     <tbody>
                        <tr>
                           <th colspan='6'>PERSONAL INFORMATION</th>
                        </tr>
                        <tr>
                           <td ><strong>Name:</strong></td>
                           <td >" . $fila_cl['nombre'] . "</td>
                          <td ><strong>last Name:</strong></td>
                           <td >" . $fila_cl['apellido'] . "</td>




                        </tr>
                        <tr>
                            <td ><strong>E-mail:</strong></td>
                           <td>" . $fila_cl['email'] . "</td>

                        </tr>

                        <tr>
                           <th colspan='6'>PAYMENT INFORMATION</th>
                        </tr>


                        <tr>
                           <th width='20%' >PACKAGE</th>
                           <th width='75%'>DESCRIPTION</th>
                             <th width='15%'></th>

                           <th width='15%'>SUBTOTAL</th>

                        </tr>

                          " . $detalle_dt . "

                        <tr>

                              <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><strong>SubTotal:</strong></td>
                           <td>" . $subtotal . "</td>
                        </tr>

                        <tr>

                             <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><strong>Discount:</strong></td>
                           <td>" . $descuento_total . "</td>
                        </tr>
                        <tr>

                             <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><strong>Total:</strong></td>
                           <td><strong>" . $monto_total . "</strong></td>
                        </tr>
                        <tr> </tr>
                     </tbody>
                  </table>

                  <strong>Phones: </strong>
<ul><li>809-933-3040809-475-7555 Main Number</li>
<li>809-349-9555 Toll Free- Santo Domingo</li>
<li>809-612-7879 Toll Free-La Romana</li>
</ul>



<p><strong>Notes:</strong></p>
<ul>
<li>You can change the attractions upon arrival</li>
<li>Taxes and fees are included in our total Price</li>
<li>Bavaro Adventure Park does not charge any Administration fee or other charge</li>
</ul>
<p><strong>Cancellation Policy:</strong></p>
<ul>
<li>Cancellation for free up to 7 days before arrival</li>
<li>From 7 days to 1 day will be applied 50%</li>
<li>24 hours before arrival will be applied 100%</li>
<li>1 Date change for free</li>
<li>1 Reservation holder name for free</li>
</ul>

<hr>
<p>Copyright 2018 Bavaroadventurepark.com. All rights reserved.
This email was sent from Bavaroadventurepark.com,Punta Cana, Dominican Republic</p>
";
  mail($mailto, $mailsubj, $mailbody, $mailhead);
  header("Location: https://www.bavaroadventurepark.com/v1/view/confirmacion_pago");

}else {
    header("Location:https://www.bavaroadventurepark.com/v1/view/pago_invalido");
}
  conectar($eliminar);
}else {
 header("Location:https://www.bavaroadventurepark.com/");
}
?>
