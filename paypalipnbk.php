<?php

ini_set('display_errors', 'On');
/* Conexion de Servidor Bavaro Adventure Park */

require_once('conexion.php');
//examina todo el IPN y lo convierte en una cadena de texto
function Array2Str($kvsep, $entrysep, $a) {
    $str = "";
    foreach ($a as $k => $v) {
        $str .= "{$k}{$kvsep}{$v}{$entrysep}";
    }
    return $str;
}

//ES OTRA FORMA DE INFORMAR AL USUARIO SOBRE EL ESTADO DEL PAGO.
//Este codigo IPN es sacado de la URL: http://programacionya.com/paypal-notificacion-de-pago-instantanea-ipn/
$payaltest = FALSE; //cambialo a false para realizar transacciones reales, de lo contrario utiliza sandbox.
$req = 'cmd=_notify-validate';
$fullipnA = array();

foreach ($_POST as $key => $value) {
    $fullipnA[$key] = $value;

    $encodedvalue = urlencode(stripslashes($value));
    $req .= "&$key=$encodedvalue";
}

$fullipn = Array2Str(" : ", "\n", $fullipnA);

if (!$payaltest) {
    $url = 'https://www.paypal.com/cgi-bin/webscr';
} else {

    $url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
}

$curl_result = $curl_err = '';
$fp = curl_init();
curl_setopt($fp, CURLOPT_URL, $url);
curl_setopt($fp, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($fp, CURLOPT_POST, 1);
curl_setopt($fp, CURLOPT_POSTFIELDS, $req);
curl_setopt($fp, CURLOPT_HTTPHEADER, array("Content-Type: application/x-www-form-urlencoded", "Content-Length: " . strlen($req)));
curl_setopt($fp, CURLOPT_HEADER, 0);
curl_setopt($fp, CURLOPT_VERBOSE, 1);
curl_setopt($fp, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($fp, CURLOPT_TIMEOUT, 30);

$response = curl_exec($fp);
$curl_err = curl_error($fp);
curl_close($fp);

// Variables enviadas por Paypal
$facturano = $_POST['invoice'];
$transaction_id = $_POST['txn_id'];
$payerid = $_POST['payer_id'];
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$payeremail = $_POST['payer_email'];
$paymentdate = $_POST['payment_date'];
$paymentstatus = $_POST['payment_status'];
$mdate = date('Y-m-d h:i:s', strtotime($paymentdate));
$otherstuff = json_encode($_POST);

if ($paymentstatus == "Completed") {
    $estado = "VERIFICADO";
} else if ($paymentstatus == "Pending") {
    $estado = "PENDIENTE";
}
$consulta = "SELECT * FROM venta WHERE id_venta='" . $facturano . "'";
$resultado = conectar($consulta);
$rows = mysqli_fetch_array($resultado);

$query = "UPDATE venta SET metodo_pago='PAYPAL',estado='$estado'"
        . " WHERE id_venta='" . $facturano . "'";
conectar($query);

if($rows["tipo_venta"] == "PAQUETES FOTOS")
{
  $venta_estado = "PAQUETES FOTOS";
}elseif ($rows["tipo_venta"] == "PAQUETES ATRACCIONES") {
    $venta_estado = "PAQUETES ATRACCIONES";
}else{
    $venta_estado = "DEVOLUCION";
}

/*insertamos la tabla ipn PAYPAL*/
$query2 = "INSERT INTO ipn_paypal
            (itransaction_id,ipayerid,iname,iemail,itransaction_date,
            ipaymentstatus,ieverything_else,tipo_venta,id_venta)
            VALUES('$transaction_id','$payerid','$firstname $lastname',"
        . "'$payeremail','$mdate', '$paymentstatus','$otherstuff',"
        . "'$venta_estado','" . $facturano . "')";
conectar($query2);


$consulta_header = "SELECT C.nombre,C.apellido,C.email,C.telefono,RV.habitacion,RV.hotel,
V.subtotal,V.descuento_total,V.monto_total,RV.fecha_reserva,P.iname,P.iemail,P.itransaction_id
 FROM venta AS V INNER JOIN clientes AS C ON V.codigo_cliente=C.codigo_cliente
LEFT JOIN reservas AS RV ON V.id_venta=RV.id_venta
LEFT JOIN ipn_paypal AS P ON P.id_venta=V.id_venta WHERE V.id_venta='" . $facturano . "'";

$resultado_header = conectar($consulta_header);
$rows_header = mysqli_fetch_array($resultado_header);

$email_cl = $rows_header["email"];

if ($rows_header['fecha_reserva'] != "") {
    $fecha = date('d-m-Y', strtotime($rows_header['fecha_reserva']));
} else {
    $fecha = "";
}

$consulta_vt = "SELECT DC.paquete,DC.descripcion,DC.cantidad_adulto,
    DC.cantidad_nino,DC.subtotal FROM detalle_compra AS DC INNER JOIN venta AS V
ON DC.id_venta=V.id_venta WHERE V.id_venta=" . $facturano . "";
$resultado_vt = conectar($consulta_vt);
$detalle_dt = "";

while ($fila_vt = mysqli_fetch_array($resultado_vt)) {

    $detalle_dt.="
<tr>
<td class='bold'>" . $fila_vt["paquete"] . "</td>
                           <td>" . $fila_vt["descripcion"] . "</td>
                           <td>" . $fila_vt["cantidad_adulto"] . "</td>
                           <td>" . $fila_vt["cantidad_nino"] . "</td>
                           <td>" . $fila_vt["subtotal"] . "</td>
            </tr>
                  ";
}
if ($rows["tipo_venta"] == "PAQUETES ATRACCIONES") {
    $remitente="operaciones@bavaroadventurepark.com,asistconta3@bavaroadventurepark.com,bknirsch@bavaroadventurepark.com,avictoria@bavaroadventurepark.com,directoroperaciones@bavaroadventurepark.com,gerenciafinanciera@bavaroadventurepark.com";
    $asunto = "Reserva Realizada y Pagada PAYPAL";
    $venta_estado = "PAQUETES ATRACCIONES";

    $consulta_r = "SELECT MAX(numero_reserva)+1 as numero_reserva FROM reservas";
    $resultado_r = conectar($consulta_r);
    $row_r = mysqli_fetch_array($resultado_r);
    $codigo = $row_r['numero_reserva'];

    $query1 = "UPDATE reservas SET numero_reserva='$codigo' WHERE id_venta='" . $facturano . "'";
    conectar($query1);


$html="<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=938 style='width:50%;mso-cellspacing:0cm;background:white;border:solid #18962e 6.0pt;

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
                           <td >" . $rows_header['nombre'] . " " . $rows_header['apellido'] . "</td>
                          <td ><strong>Date of Visit:</strong></td>
                           <td>" . $fecha . "</td>




                        </tr>
                        <tr>
                            <td ><strong>E-mail:</strong></td>
                           <td>" . $rows_header['email'] . "</td>
                           <td ><strong>Telefono:</strong></td>
                           <td>" . $rows_header['telefono'] . "</td>

                        </tr>
                        <tr>
                           <td ><strong>Room No.:</strong></td>
                           <td >" . $rows_header['habitacion'] . "</td>
                          <td ><strong>Hotel:</strong></td>
                           <td>" . $rows_header['hotel'] . "</td>




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
                           <td>" . $rows_header["subtotal"] . "</td>
                        </tr>

                        <tr>

                             <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><strong>Discount:</strong></td>
                           <td>" . $rows_header["descuento_total"] . "</td>
                        </tr>
                        <tr>

                             <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><strong>Total:</strong></td>
                           <td><strong>" . $rows_header["monto_total"] . "</strong></td>
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
<p>Copyright 2015 Bavaroadventurepark.com. All rights reserved.
This email was sent from Bavaroadventurepark.com,Punta Cana, Dominican Republic</p>
";
} else if ($rows["tipo_venta"] == "PAQUETES FOTOS") {
    $remitente="asistconta3@bavaroadventurepark.com,phototeam@bavaroadventurepark.com,bknirsch@bavaroadventurepark.com,avictoria@bavaroadventurepark.com";
    $venta_estado = "PAQUETES FOTOS";
    $asunto =  "Pago de Paquete de Fotos PAYPAL";
    $html="
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
                           <td >".$rows_header['nombre']."</td>
                          <td ><strong>last Name:</strong></td>
                           <td >".$rows_header['apellido']."</td>
                        </tr>
                        <tr>
                            <td ><strong>E-mail:</strong></td>
                           <td>".$rows_header['email']."</td>
                        </tr>
                        <tr>
                           <th colspan='6'>PAYPAL ACCOUNT</th>
                        </tr>
                        <tr>
                           <td ><strong>Full Name:</strong></td>
                           <td >".$rows_header['iname']."</td>
                          <td ><strong>E-mail:</strong></td>
                           <td >".$rows_header['iemail']."</td>
                        </tr>
                        <tr>
                            <td ><strong>Transaction ID:</strong></td>
                           <td>".$rows_header['itransaction_id']."</td>
                        </tr>
                        <tr>
                           <th width='20%' >PACKAGE</th>
                           <th width='75%'>DESCRIPTION</th>
                             <th width='15%'></th>
                           <th width='15%'>SUBTOTAL</th>
                        </tr>
                          ".$detalle_dt."
                        <tr>
                              <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><strong>SubTotal:</strong></td>
                           <td>".$rows_header["subtotal"]."</td>
                        </tr>
                        <tr>
                             <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><strong>Discount:</strong></td>
                           <td>".$rows_header["descuento_total"]."</td>
                        </tr>
                        <tr>
                             <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><strong>Total:</strong></td>
                           <td><strong>". $rows_header["monto_total"] ."</strong></td>
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
This email was sent from Bavaroadventurepark.com,Punta Cana, Dominican Republic</p>";
} else {
    $venta_estado = "DEVOLUCION";
    $asunto = "Devolucion de Dinero";
}


/* Email de factura que se le envia al cliente */
$mailto = "" . $email_cl . ",".$remitente."";
$mailsubj = $asunto;
$mailhead = "From:webmaster@bavaroadventurepark.com\r\n";
$mailhead .= "Content-type: text/html\r\n";
$mailbody =$html;


mail($mailto, $mailsubj, $mailbody, $mailhead);
$eliminar = "DELETE FROM ci_sessions";
conectar($eliminar);
?>
