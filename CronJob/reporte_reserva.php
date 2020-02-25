<?php 
ini_set('default_charset','utf8');
require_once '../../functions/correo_functions.php';
//include("../../seguridad.php");
require_once('../conexion.php');
 //date_default_timezone_set('America/Santo_Domingo');
$fecha_reporte=date("y-m-d");
function mostrarFecha(){
		$dia=date("d");
// Obtenemos y traducimos el nombre del mes
			$mes=date("F");
			if ($mes=="January") $mes="Enero";
			if ($mes=="February") $mes="Febrero";
			if ($mes=="March") $mes="Marzo";
			if ($mes=="April") $mes="Abril";
			if ($mes=="May") $mes="Mayo";
			if ($mes=="June") $mes="Junio";
			if ($mes=="July") $mes="Julio";
			if ($mes=="August") $mes="Agosto";
			if ($mes=="September") $mes="Setiembre";
			if ($mes=="October") $mes="Octubre";
			if ($mes=="November") $mes="Noviembre";
			if ($mes=="December") $mes="Diciembre";
			// Obtenemos el ao
			$ano=date("Y");
          return "$dia de $mes, $ano";
}	       $today=date("Y-m-d"); 
$dia_manana= date('d-m-y', strtotime('+1 day')) ;

$consulta= mysql_query("SELECT cl.idcliente,cl.hotel, cl.email as email_cliente,cl.habitacion,cl.nombre as nombre_cliente,cl.apellido as apellido_cliente,cp.nombre AS nombre_paquete,
cl.telefono,cp.estado,cp.fecha_pago,pp.total,pp.email as email_paypal,pp.nombre as nombre_paypal,pp.apellido as apellido_paypal,
dc.cantidad_adulto,dc.cantidad_nino,dc.descuento,dc.subtotal,dc.subtotal_adulto,dc.subtotal_nino,dc.cantidad_nino,dc.detalle_compra,
rv.fecha_reserva,rv.numero_reserva,rv.hotel FROM cliente AS cl INNER JOIN paypal AS pp ON cl.idcliente = pp.cliente_idcliente
INNER JOIN compra AS cp ON cl.idcliente = cp.cliente_idcliente INNER JOIN detalle_compra AS dc ON cl.idcliente = dc.cliente_idcliente
INNER JOIN reservas AS rv ON cl.idcliente = rv.cliente_idcliente WHERE cp.estado='Proceso'");
			while($row=mysql_fetch_array($consulta)){
 $id=$row['idcliente'];
$mailto =$row['email_cliente'];
$mailsubj = "Llegadas de Reservas‏";
$mailhead = "From:webmaster@bavaroadventurepark.com\r\n";
$mailhead .= "Content-type: text/html\r\n";				   
$mailbody ="
<a href='http://bavaroadventurepark.com/bavaro-shopping_cart.php?id='$id''>Bavaro Adventure Park</a>
Webmaster<br>

Innovatech VS

";

mail($mailto, $mailsubj, $mailbody, $mailhead);

           
					

			}



?>