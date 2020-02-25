<?php
ini_set('display_errors','On');
/*Conexion de Servidor Bavaro Adventure Park*/

require_once('conexion.php');
/*
 * Conexion de Servidor de Prueba
function conectar($sql) {
   $servidor = "localhost";
   $nombreBD = "antonyvs_bap_carrito";
   $usuario = "antonyvs";
   $contrasena = "Q@rdd1izYrx3";
   $conexion = mysqli_connect($servidor, $usuario, $contrasena, $nombreBD);
   mysqli_query($conexion, "SET NAMES 'utf8'");
   return mysqli_query($conexion, $sql);
}*/
//ES OTRA FORMA DE INFORMAR AL USUARIO SOBRE EL ESTADO DEL PAGO.
//Este codigo IPN es sacado de la URL: http://programacionya.com/paypal-notificacion-de-pago-instantanea-ipn/
$payaltest = true; //cambialo a false para realizar transacciones reales, de lo contrario utiliza sandbox.

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
$transaction_id = $_POST['txn_id'];
$payerid = $_POST['payer_id'];
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$payeremail = $_POST['payer_email'];
$paymentdate = $_POST['payment_date'];
$paymentstatus = $_POST['payment_status'];
$mdate = date('Y-m-d h:i:s', strtotime($paymentdate));
$otherstuff = json_encode($_POST);


$consulta = "SELECT MAX(codigo_cliente) as codigo_cliente FROM clientes";
$resultado = conectar($consulta);
$rows = mysqli_fetch_array($resultado);


$cl_tipo_vt="SELECT * FROM venta WHERE codigo_cliente='". $rows['codigo_cliente']."'";
$resultado_tipo_vt=conectar($cl_tipo_vt);
$fila_tipo=mysqli_fetch_array($resultado_tipo_vt);

if($fila_tipo['tipo_venta']=="PAQUETES ATRACCIONES"){
// insert in our IPN record table
$query = "INSERT INTO ipn_paypal
            (itransaction_id,ipayerid,iname,iemail,itransaction_date, ipaymentstatus,ieverything_else,tipo_venta,codigo_cliente)
            VALUES('$transaction_id','$payerid','$firstname $lastname','$payeremail','$mdate', '$paymentstatus','$otherstuff','PAQUETE ATRACCIONES','" . $rows['codigo_cliente'] . "')";
conectar($query);

if ($paymentstatus == "Completed") {

   $estado = "VERIFICADO";
}

$update = "UPDATE venta SET estado='$estado' WHERE codigo_cliente='" . $rows['codigo_cliente'] . "'";
conectar($update);

$consulta_r="SELECT MAX(numero_reserva)+1 as numero_reserva FROM reservas";
$resultado_r=conectar($consulta_r);
$row_r=mysqli_fetch_array($resultado_r);
$codigo=$row_r['numero_reserva'];

$query="UPDATE reservas SET numero_reserva='$codigo' WHERE codigo_cliente='".$rows['codigo_cliente'] ."'";
conectar($query);

$consulta_vt="SELECT vt.fecha_compra,vt.monto_total,vt.descuento_total,vt.subtotal,
dc.cantidad_adulto,dc.cantidad_nino,dc.descripcion,dc.paquete,dc.subtotal as subtotal_det
FROM venta AS vt INNER JOIN detalle_compra AS dc ON vt.codigo_cliente=dc.codigo_cliente
WHERE vt.codigo_cliente=".$rows['codigo_cliente']."";
$resultado_vt=conectar($consulta_vt);
$detalle_dt="";
while($fila_vt=mysqli_fetch_array($resultado_vt))
{

$subtotal=$fila_vt["subtotal"];
$descuento_total=$fila_vt["descuento_total"];
$monto_total=$fila_vt["monto_total"];
$detalle_dt.="       
<tr>
<td class='bold'>".$fila_vt["paquete"]."</td>
                           <td>".$fila_vt["descripcion"]."</td>
                           <td>".$fila_vt["cantidad_adulto"]."</td>
                           <td>".$fila_vt["cantidad_nino"]."</td>
                           <td>".$fila_vt["subtotal_det"]."</td>
            </tr>            
                  ";

}


$consuta_cl="SELECT cl.nombre,cl.apellido,cl.email, vt.fecha_compra,vt.monto_total,vt.descuento_total,vt.subtotal,rv.fecha_reserva,rv.habitacion,rv.hotel,
dc.cantidad_adulto,dc.cantidad_nino,dc.descripcion,dc.paquete,dc.subtotal as subtotal_det
FROM venta AS vt INNER JOIN clientes as cl ON cl.codigo_cliente=vt.codigo_cliente INNER JOIN detalle_compra AS dc ON vt.codigo_cliente=dc.codigo_cliente INNER JOIN
reservas as rv  ON rv.codigo_cliente=vt.codigo_cliente
WHERE vt.codigo_cliente=". $rows['codigo_cliente']."";
$resultado_cl=conectar($consuta_cl);
$fila_cl=mysqli_fetch_array($resultado_cl);

$email_cl=$fila_cl["email"];



/*Email de factura que se le envia al cliente*/
   $mailto ="".$email_cl.",operaciones@bavaroadventurepark.com,asistconta3@bavaroadventurepark.com,avasquez@innovatechvs.com,bknirsch@bavaroadventurepark.com,avictoria@bavaroadventurepark.com";
   $mailsubj = "Reserva Realizada y Pagada";
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
                           <td >".$fila_cl['nombre']." ".$fila_cl['apellido']."</td>
                          <td ><strong>Res. Date:</strong></td>
                           <td>".date('d-m-Y',strtotime($fila_cl['fecha_reserva']))."</td>
                         
              
                        
                           
                        </tr>
                        <tr>
                            <td ><strong>E-mail:</strong></td>
                           <td>".$fila_cl['email']."</td>  
                            
                        </tr>
                        <tr>
                           <td ><strong>Room No.:</strong></td>
                           <td >".$fila_cl['habitacion']."</td>
                          <td ><strong>Hotel:</strong></td>
                           <td>".$fila_cl['hotel']."</td>
                         
              
                        
                           
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
                           <td>".$subtotal."</td>
                        </tr>
                        
                        <tr>
                           
                             <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><strong>Discount:</strong></td>
                           <td>".$descuento_total."</td>
                        </tr>
                        <tr>
                             
                             <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><strong>Total:</strong></td>
                           <td><strong>".$monto_total."</strong></td>
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
 
                  
    mail($mailto, $mailsubj, $mailbody, $mailhead);
    $eliminar="DELETE FROM ci_sessions";
conectar($eliminar);
}else{
    
    
// insert in our IPN record table
$query = "INSERT INTO ipn_paypal
            (itransaction_id,ipayerid,iname,iemail,itransaction_date, ipaymentstatus,ieverything_else,tipo_venta,codigo_cliente)
            VALUES('$transaction_id','$payerid','$firstname $lastname','$payeremail','$mdate', '$paymentstatus','$otherstuff','PAQUETES FOTOS','" . $rows['codigo_cliente'] . "')";
conectar($query);

if ($paymentstatus == "Completed") {

   $estado = "VERIFICADO";
}

$update = "UPDATE venta SET estado='$estado' WHERE codigo_cliente='" . $rows['codigo_cliente'] . "'";
conectar($update);

$consulta_vt="SELECT vt.fecha_compra,vt.monto_total,vt.descuento_total,vt.subtotal,
dc.cantidad_adulto,dc.cantidad_nino,dc.descripcion,dc.paquete,dc.subtotal as subtotal_det
FROM venta AS vt INNER JOIN detalle_compra AS dc ON vt.codigo_cliente=dc.codigo_cliente
WHERE vt.codigo_cliente=".$rows['codigo_cliente']."";
$resultado_vt=conectar($consulta_vt);
$detalle_dt="";
while($fila_vt=mysqli_fetch_array($resultado_vt))
{

$subtotal=$fila_vt["subtotal"];
$descuento_total=$fila_vt["descuento_total"];
$monto_total=$fila_vt["monto_total"];
$detalle_dt.="       
<tr>
<td class='bold'>".$fila_vt["paquete"]."</td>
                           <td>".$fila_vt["descripcion"]."</td>
                           <td>".$fila_vt["subtotal_det"]."</td>
            </tr>            
                  ";

}


$consuta_cl="SELECT cl.nombre,cl.apellido,cl.email
 FROM clientes as cl  WHERE cl.codigo_cliente=". $rows['codigo_cliente']."";
$resultado_cl=conectar($consuta_cl);
$fila_cl=mysqli_fetch_array($resultado_cl);

$email_cl=$fila_cl["email"];



/*Email de factura que se le envia al cliente*/
    $mailto ="'".$email_cl."',avasquez@innovatechvs.com,asistconta3@bavaroadventurepark.com,phototeam@bavaroadventurepark.com";
    $mailsubj = "Pago de Paquete de Fotos";
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
                           <td >".$fila_cl['nombre']."</td>
                          <td ><strong>last Name:</strong></td>
                           <td >".$fila_cl['apellido']."</td>
                         
              
                        
                           
                        </tr>
                        <tr>
                            <td ><strong>E-mail:</strong></td>
                           <td>".$fila_cl['email']."</td>  
                            
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
                           <td>".$subtotal."</td>
                        </tr>
                        
                        <tr>
                           
                             <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><strong>Discount:</strong></td>
                           <td>".$descuento_total."</td>
                        </tr>
                        <tr>
                             
                             <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><strong>Total:</strong></td>
                           <td><strong>".$monto_total."</strong></td>
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
                  
    mail($mailto, $mailsubj, $mailbody, $mailhead);    
 
}


if (strcmp($response, "VERIFIED") == 0) {
   // Verifico el estado de la orden
   if ($payment_status != "Completed") {





      TransLog("El pago no fue aceptado por paypal - Estado del Pago: $payment_status");
      StopProcess();
   }

   //todo bien hasta ahora, la transacci�n ha sido confirmada por lo tanto puedo realizar mis tareas, 
   //actualizar DB, stock, acreditar c�mputos, activar cuentas etc etc



   TransLog("Pago Correcto - $fullipn"); //notifico al webmaster
} else { //la transacci�n es invalida NO se puedo cobrarle al cliente.
   TransLog("Pago Inv�lido - $fullipn");
}

//funci�n b�sica para las notificaciones
function notify_webmaster($message) {
   $subject = "Nuevo Pago";
   $remite = "tu-email";
   $remitente = "Tu remitente";

   $header .="MIME-Version: 1.0\n";
   $header .= "Content-type: text/html; charset=iso-8859-1\n";
   $header .="From: " . $remitente . "<" . $remite . ">\n";
   $header .="Return-path: " . $remite . "\n";
   $header .="X-Mailer: PHP/" . phpversion() . "\n";

   mail("email-aqui-de-quiren-recibe", $subject, $message, $header);
}

//esta funcion puede utilizarse como almacenar en una variable global todas las acciones del script, de esta manera podremos rastrear errors facilmente.
function TransLog($message) {
   notify_webmaster($message);
}

//examina todo el IPN y lo convierte en una cadena de texto
function Array2Str($kvsep, $entrysep, $a) {
   $str = "";
   foreach ($a as $k => $v) {
      $str .= "{$k}{$kvsep}{$v}{$entrysep}";
   }
   return $str;
}

//para toda la ejecuci�n del programa
function StopProcess() {
   exit;
}

?>
