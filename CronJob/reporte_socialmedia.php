<?php
require_once('../conexion.php');
require_once '../../functions/correo_functions.php';
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
	//consula proceso		
  $consulta_proceso= mysql_query("SELECT
		  cliente.idcliente,
	CONCAT(
		cliente.nombre,
		' ',
		cliente.apellido
	) AS nombre_cliente,
	cliente.email,
	compra.nombre AS paquete,
	reservas.fecha_reserva,
	compra.fecha_pago
FROM
	cliente
INNER JOIN compra ON cliente.idcliente = compra.cliente_idcliente
INNER JOIN reservas ON cliente.idcliente = reservas.cliente_idcliente
WHERE
	compra.estado = 'Proceso'
AND
	compra.fecha_pago ='$fecha_reporte'");
if($row=mysql_num_rows($consulta_proceso)!=0){
			$row_proceso = "";

			

			while($row=mysql_fetch_array($consulta_proceso)){

            $row_proceso .= "
			     <tr>
   <td>".$row['nombre_cliente']."</td>
   <td>".$row['paquete']."</td>
   <td>".date("d-m-y",strtotime($row['fecha_pago']))."</td>
   <td>".$row['email']."</td>
   <td><a href='http://www.bavaroadventurepark.com/Admin/bavaro-detalle_pendiente.php?id=".$row['idcliente']."' target='_blank'>Mas Info</a></td>
            </tr>";	

			}
	
///envio de email
$mailto = "socialmedia@innovatechvs.com";
//$mailto = "asistencia@innovatechvs.com,avasquez@innovatechvs.com";

$mailsubj = "Reporte diario Bavaro Adventure Park";

$mailhead = "From:webmaster@bavaroadventurepark.com\r\n";$mailhead .= "Content-type: text/html\r\n";				   

$mailbody ="

<h1 align='center'>Bavaro Adventure Park Para Social Media</h1>

<h3 align='center'>".mostrarFecha()."</h3>


<h2>Solicitudes no Pagadas</h2>
			<table width='100%' border='1'>

  <tr>

    <td align='center'><strong>Cliente</strong></td>

    <td align='center'><strong>Paquetes</strong></td>

    <td align='center'><strong>Fecha Solicitud</strong></td>

    <td align='center'><strong>E-mail</strong></td>
	    <td align='center'><strong>Acciones</strong></td>

  </tr>
  ".$row_proceso ."
         </table>
<br><br>

Webmaster<br>

Innovatech VS

";

mail($mailto, $mailsubj, $mailbody, $mailhead);

	}

?>