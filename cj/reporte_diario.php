<?php 
ini_set('default_charset','utf8');

function conectar($sql) {
   $servidor = "localhost";
   $nombreBD = "bavaroad_bavaroadventurepark";
   $usuario = "bavaroad_Admin";
   $contrasena = "Pt927107";
   $conexion = mysqli_connect($servidor, $usuario, $contrasena, $nombreBD);
   mysqli_query($conexion, "SET NAMES 'utf8'");
   return mysqli_query($conexion, $sql);
}

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
	cl.codigo_cliente,
	CONCAT(cl.nombre, ' ', cl.apellido) AS Nombre,
	vt.monto_total,
	vt.tipo_venta,
	dc.paquete, vt.estado,
   rv.fecha_reserva as Fecha
FROM
	clientes AS cl
INNER JOIN venta AS vt ON cl.codigo_cliente = vt.codigo_cliente
INNER JOIN detalle_compra AS dc ON dc.codigo_cliente = vt.codigo_cliente
INNER JOIN reservas as rv ON rv.codigo_cliente=vt.codigo_cliente
WHERE
	vt.estado = 'VERIFICADO' AND DATE(vt.fecha_compra) =DATE(NOW()) ORDER BY vt.fecha_compra DESC");
			$row_llegada = "";
			while($rowp=mysqli_fetch_array($consulta)){

             $row_llegada .= "
			     <tr>

							   <td>".$rowp['Nombre']."</td>
							   <td>".$rowp['paquete']."</td>
							   <td>".date("d-m-Y",strtotime($rowp['Fecha']))."</td>
							   <td>".$rowp['monto_total']."</td>
                               <td>".$rowp['tipo_venta']."</td>
                               <td>".$rowp['estado']."</td>

							   </tr>";	

			}


$consulta= conectar("SELECT
	cl.codigo_cliente,
	CONCAT(cl.nombre, ' ', cl.apellido) AS Nombre,
	vt.monto_total,
	vt.tipo_venta,
	dc.paquete, vt.estado,
	vt.fecha_compra AS Fecha
FROM
	clientes AS cl
INNER JOIN venta AS vt ON cl.codigo_cliente = vt.codigo_cliente
INNER JOIN detalle_compra AS dc ON dc.codigo_cliente = vt.codigo_cliente
WHERE
	vt.estado = 'NO VALIDO' 
AND DATE(vt.fecha_compra) =DATE(NOW()) ORDER BY vt.fecha_compra DESC");
			$row_pendiente= "";
			while($row=mysqli_fetch_array($consulta)){

             $row_pendiente .= "
			     <tr>

							   <td>".$row['Nombre']."</td>
							   <td>".$row['paquete']."</td>
							   <td>".date("d-m-Y",strtotime($row['Fecha']))."</td>
							   <td>".$row['monto_total']."</td>
                               <td>".$row['tipo_venta']."</td>
                               <td>".$row['estado']."</td>

							   </tr>";	

			}


$consulta1="SELECT * FROM venta WHERE date(fecha_compra)=DATE(NOW())";
$resultado=conectar($consulta1);
$total=mysqli_fetch_array($resultado);
if(count($total)>0){
$mailto ="avasquez@innovatechvs.com";
$mailsubj = "RESERVAS BAVARO ADVENTURE PARK";
$headers = "From: BAVAROADVENTUREPARK <software@innovatechvs.com>\r\n"; 
$headers.= "Content-type: text/html\r\n"; 
$headers .= "Reply-To: software@innovatechvs.com\r\n";
$headers .= "Bcc: software@innovatechvs.com\r\n";		   
$mailbody ="
<h1 align='center'>Bavaro Adventure Park</h1>
<h3 align='center'>".mostrarFecha()."</h3>
 <table width='100%' border='1'>
  <tr>
    <td align='center'><strong>Cliente</strong></td>
    <td align='center'><strong>Paquetes</strong></td>
    <td align='center'><strong>Fecha reserva</strong></td>
    <td align='center'><strong>Monto</strong></td>
    <td align='center'><strong>Venta Tipo</strong></td>
     <td align='center'><strong>Estado</strong></td>
  </tr>
".$row_llegada."
</table>
<h3>Reservas Pendientes de Pago</h3>
 <table width='100%' border='1'>
  <tr>
    <td align='center'><strong>Cliente</strong></td>
    <td align='center'><strong>Paquetes</strong></td>
    <td align='center'><strong>Fecha reserva</strong></td>
    <td align='center'><strong>Monto</strong></td>
    <td align='center'><strong>Venta Tipo</strong></td>
    <td align='center'><strong>Estado</strong></td>
  </tr>
".$row_pendiente."
</table>
<br>
Webmaster<br>
Innovatech VS";
mail($mailto, $mailsubj, $mailbody, $headers);
}

?>