<?php 
ini_set('default_charset','utf8');

require_once('../conexion.php');

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

//funcion para conocer dia de la semana
function conocerDiaSemanaFecha($fecha) {
    $dias = array('Domingo', 'Lunes', 'Martes', 'Mi&eacute;rcoles', 'Jueves', 'Viernes', 'S&aacute;bado');
    $dia = $dias[date('w', strtotime($fecha))];
    return $dia;
}
//function para convertir fecha en letra
function obtenerFechaEnLetra($fecha){
    $dia= conocerDiaSemanaFecha($fecha);
    $num = date("j", strtotime($fecha));
    $anno = date("Y", strtotime($fecha));
    $mes = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');
    $mes = $mes[(date('m', strtotime($fecha))*1)-1];
    return $dia.', '.$num.' de '.$mes.' del '.$anno;
}
 
 
$dia_manana= date('d-m-Y', strtotime('+1 day')) ;

$dia_manana=obtenerFechaEnLetra($dia_manana);

setlocale(LC_MONETARY,"en_US");

$consulta= conectar("SELECT
cl.codigo_cliente,
rv.fecha_reserva,
CONCAT(cl.nombre, ' ', cl.apellido) AS Nombre,
dc.subtotal,
vt.tipo_venta, vt.metodo_pago, vt.monto_total as total_venta,
dc.paquete,
DATE(vt.fecha_compra) AS Fecha,
dc.cantidad_adulto,
dc.cantidad_nino
FROM
  clientes AS cl
INNER JOIN venta AS vt ON cl.codigo_cliente = vt.codigo_cliente
INNER JOIN detalle_compra AS dc on dc.codigo_cliente=vt.codigo_cliente  
INNER JOIN reservas as rv  ON rv.codigo_cliente=vt.codigo_cliente
WHERE vt.estado='VERIFICADO' AND rv.fecha_reserva>DATE(NOW()) ORDER by rv.fecha_reserva");
			$row_llegada = "";
			while($row=mysqli_fetch_array($consulta)){

             $row_llegada .= "
			     <tr>

							   <td>".$row['Nombre']."</td>
							   <td>".$row['paquete']."</td>
							   <td>".date('d-m-Y', strtotime($row['Fecha']))."</td>
							   <td>".date('d-m-Y', strtotime($row['fecha_reserva']))."</td>
							   <td>".$row['cantidad_adulto']."</td>
							   <td>".$row['cantidad_nino']."</td>
                               <td>".$row['tipo_venta']."</td>
                               <td>".money_format('%i', $row['subtotal']) ."</td>
                               <td>".money_format('%i', $row['total_venta']) ."</td>
                               <td>".$row['metodo_pago']."</td>

							   </tr>
							";	

			}
///envio de email
//$mailto = "".destinatio_reportenoche()."";
   $mailto ="avictoria@bavaroadventurepark.com,reservas@bavaroadventurepark.com,recepcion1@bavaroadventurepark.com,cmmercado@bavaroadventurepark.com,directoroperaciones@bavaroadventurepark.com,bknirsch@bavaroadventurepark.com";
$mailsubj = "Reporte Llegadas Futuras";
$headers = "From: BAVAROADVENTUREPARK <info@bavaroadventurepark.com>\r\n"; 
$headers.= "Content-type: text/html\r\n"; 
$headers .= "Reply-To: info@bavaroadventurepark.com\r\n";   
$mailbody ="
<h1 align='center'>Bavaro Adventure Park</h1>
<h3 align='center'>".mostrarFecha()."</h3>
<h3 align='center'>Llegadas de Reservas Pagadas Proximas</h3>
 <table width='95%'  cellpadding='0' border='1px' bordercolor='#eeeeee' style='border-collapse: collapse;'>
  <tr bgcolor='#f6f8f1'>
    <td align='center'><strong>Cliente</strong></td>
    <td align='center'><strong>Paquete</strong></td>
    <td align='center'><strong>Fecha Compra</strong></td>
    <td align='center'><strong>Fecha Llegada</strong></td>
    <td align='center'><strong>Adultos</strong></td>
    <td align='center'><strong>Ni&ntilde;os</strong></td>
    <td align='center'><strong>Venta Tipo</strong></td>
    <td align='center'><strong>Subtotal</strong></td>
    <td align='center'><strong>Total Venta</strong></td>
    <td align='center'><strong>Pago</strong></td>
  </tr>
".$row_llegada."
</table>
<br>


Webmaster<br>

Berry Whale

";

mail($mailto, $mailsubj, $mailbody, $headers);



?>