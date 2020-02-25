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

$consulta= conectar("SELECT
	cl.codigo_cliente, cl.telefono,
	CONCAT(cl.nombre, ' ', cl.apellido) AS Nombre, cl.email,
	vt.monto_total,
	vt.tipo_venta,
	dc.paquete, vt.estado, dc.cantidad_adulto, dc.cantidad_nino,
	vt.fecha_compra AS Fecha, rv.fecha_reserva, vt.metodo_pago
FROM
	clientes AS cl
INNER JOIN venta AS vt ON cl.codigo_cliente = vt.codigo_cliente
INNER JOIN detalle_compra AS dc ON dc.codigo_cliente = vt.codigo_cliente
INNER JOIN reservas AS rv ON rv.codigo_cliente = vt.codigo_cliente
WHERE
	vt.estado = 'VERIFICADO' 
AND DATE(vt.fecha_compra)=DATE(NOW())
HAVING vt.tipo_venta= 'PAQUETES ATRACCIONES'");
			$row_llegada = "";
			while($rowp=mysqli_fetch_array($consulta)){

             $row_llegada .= "
			     <tr>
                 <td>".$rowp['codigo_cliente']."</td> 
							   <td>".$rowp['Nombre']."</td>
							   <td>".$rowp['paquete']."</td>
							   <td>".date("d-m-Y",strtotime($rowp['Fecha']))."</td>
							   <td>".date("d-m-Y",strtotime($rowp['fecha_reserva']))."</td>
                               <td>".$rowp['email']."</td>
                               <td>".$rowp['telefono']."</td>
                               <td>".$rowp['monto_total']."</td>
                               <td>".$rowp['cantidad_adulto']."</td>
                               <td>".$rowp['cantidad_nino']."</td>
                               <td>".$rowp['metodo_pago']."</td>

							   </tr>";	

			}


$consulta2= conectar("SELECT
	cl.codigo_cliente, cl.telefono,
	CONCAT(cl.nombre, ' ', cl.apellido) AS Nombre, cl.email,
	vt.monto_total,
	vt.tipo_venta,
	dc.paquete, vt.estado, dc.cantidad_adulto, dc.cantidad_nino,
	vt.fecha_compra AS Fecha, rv.fecha_reserva
FROM
	clientes AS cl
INNER JOIN venta AS vt ON cl.codigo_cliente = vt.codigo_cliente
INNER JOIN detalle_compra AS dc ON dc.codigo_cliente = vt.codigo_cliente
INNER JOIN reservas AS rv ON rv.codigo_cliente = vt.codigo_cliente
WHERE
	vt.estado = 'NO VALIDO' 
AND DATE(vt.fecha_compra)=DATE(NOW())
HAVING vt.tipo_venta= 'PAQUETES ATRACCIONES'");
			$row_pendiente= "";
			while($row=mysqli_fetch_array($consulta2)){

             $row_pendiente .= "
			     <tr>
                 <td>".$row['codigo_cliente']."</td>
							   <td>".$row['Nombre']."</td>
							   <td>".$row['paquete']."</td>
							   <td>".date("d-m-Y",strtotime($row['Fecha']))."</td>
							   <td>".date("d-m-Y",strtotime($row['fecha_reserva']))."</td>
							   <td>".$row['email']."</td>
                               <td>".$row['telefono']."</td>
                               <td>".$row['monto_total']."</td>
                               <td>".$row['cantidad_adulto']."</td>
                               <td>".$row['cantidad_nino']."</td>


							   </tr>";	

			}

			$consulta3= conectar("SELECT
cl.codigo_cliente,
rv.fecha_reserva,
CONCAT(cl.nombre, ' ', cl.apellido) AS Nombre,
vt.monto_total,
vt.tipo_venta, vt.metodo_pago,
dc.paquete,
DATE(vt.fecha_compra) AS Fecha,
dc.cantidad_adulto,
dc.cantidad_nino
FROM
  clientes AS cl
INNER JOIN venta AS vt ON cl.codigo_cliente = vt.codigo_cliente
INNER JOIN detalle_compra AS dc on dc.codigo_cliente=vt.codigo_cliente
INNER JOIN reservas as rv  ON rv.codigo_cliente=vt.codigo_cliente
WHERE vt.estado='VERIFICADO' AND rv.fecha_reserva=DATE(NOW() + INTERVAL 1 DAY)");
			$row_llegadam = "";
			while($rowll=mysqli_fetch_array($consulta3)){

             $row_llegadam .= "
			     <tr>
                 <td>".$rowll['codigo_cliente']."</td>
							   <td>".$rowll['Nombre']."</td>
							   <td>".$rowll['paquete']."</td>
							   <td>".date('d-m-Y', strtotime($rowll['Fecha']))."</td>
							   <td>".date('d-m-Y', strtotime($rowll['fecha_reserva']))."</td>
							   <td>".$rowll['cantidad_adulto']."</td>
							   <td>".$rowll['cantidad_nino']."</td>
                               <td>".$rowll['tipo_venta']."</td>
                               <td>".money_format('%i', $rowll['monto_total']) ."</td>
                               <td>".$rowll['metodo_pago']."</td>

							   </tr>
							";	

			}


$consulta1="SELECT * FROM venta WHERE date(fecha_compra)=DATE(NOW())";
$resultado=conectar($consulta1);
$total=mysqli_fetch_array($resultado);
if(count($total)>0){
$mailto ="edwin@berrywhale.com,avictoria@bavaroadventurepark.com,reservas@bavaroadventurepark.com,recepcion1@bavaroadventurepark.com,cmmercado@bavaroadventurepark.com,directoroperaciones@bavaroadventurepark.com,gerenciafinanciera@bavaroadventurepark.com,asistconta5@bavaroadventurepark.com,contabilidad@bavaroadventurepark.com,asistconta3@bavaroadventurepark.com";
$mailsubj = "RESERVAS BAVARO ADVENTURE PARK";
$headers = "From: BAVAROADVENTUREPARK <info@bavaroadventurepark.com>\r\n"; 
$headers.= "Content-type: text/html\r\n"; 
$headers .= "Reply-To: info@bavaroadventurepark.com\r\n";
$headers .= "Bcc: software@innovatechvs.com\r\n";		   
$mailbody ="
<h1 align='center'>Bavaro Adventure Park</h1>
<h3 align='center'>".mostrarFecha()."</h3>
<h3>Reservas Pagadas</h3> 
 <table width='95%'  cellpadding='0' border='1px' bordercolor='#eeeeee' style='border-collapse: collapse;'>
  <tr bgcolor='#f6f8f1'>
    <td align='center'><strong>Codigo</strong></td>
    <td align='center'><strong>Cliente</strong></td>
    <td align='center'><strong>Paquete</strong></td>
    <td align='center'><strong>Fecha Reserva</strong></td>
    <td align='center'><strong>Fecha Llegada</strong></td>
    <td align='center'><strong>Email</strong></td>
    <td align='center'><strong>Telefono</strong></td>
    <td align='center'><strong>Monto</strong></td>
    <td align='center'><strong>Adultos</strong></td>
    <td align='center'><strong>Ni&ntilde;os</strong></td>
    <td align='center'><strong>Pago</strong></td>
  </tr>
".$row_llegada."
</table>
<h3>Intentos de Reservas No Pagados</h3>
 <table width='95%'  cellpadding='0' border='1px' bordercolor='#eeeeee' style='border-collapse: collapse;'>
  <tr bgcolor='#f6f8f1'>
    <td align='center'><strong>Codigo</strong></td>
    <td align='center'><strong>Cliente</strong></td>
    <td align='center'><strong>Paquete</strong></td>
    <td align='center'><strong>Fecha Reserva</strong></td>
    <td align='center'><strong>Fecha Llegada</strong></td>
    <td align='center'><strong>Email</strong></td>
    <td align='center'><strong>Telefono</strong></td>
    <td align='center'><strong>Monto</strong></td>
    <td align='center'><strong>Adultos</strong></td>
    <td align='center'><strong>Ni&ntilde;os</strong></td>

  </tr>
".$row_pendiente."
</table>
<br>

<h3 >LLegadas del dia ".$dia_manana."</h3>
 <table width='95%'  cellpadding='0' border='1px' bordercolor='#eeeeee' style='border-collapse: collapse;'>
  <tr bgcolor='#f6f8f1'>
    <td align='center'><strong>Codigo</strong></td>
    <td align='center'><strong>Cliente</strong></td>
    <td align='center'><strong>Paquete</strong></td>
    <td align='center'><strong>Fecha Compra</strong></td>
    <td align='center'><strong>Fecha Llegada</strong></td>
    <td align='center'><strong>Adultos</strong></td>
    <td align='center'><strong>Ni&ntilde;os</strong></td>
    <td align='center'><strong>Venta Tipo</strong></td>
    <td align='center'><strong>Monto</strong></td>
    <td align='center'><strong>Pago</strong></td>
  </tr>
".$row_llegadam."
</table>
<br>
Webmaster<br>
Berry Whale";
mail($mailto, $mailsubj, $mailbody, $headers);
}

?>