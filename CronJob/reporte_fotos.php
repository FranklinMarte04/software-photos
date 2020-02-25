<?php 

ini_set('default_charset','utf8');



require_once('conexion.php');



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

 

 

$dia_ayer= date('d-m-Y', strtotime('-1 day')) ;



$dia_ayer=obtenerFechaEnLetra($dia_ayer);



setlocale(LC_MONETARY,"en_US");



$consulta= conectar("SELECT

cl.codigo_cliente, cl.nombre, cl.apellido,

DATE(vt.fecha_compra) AS Fecha, dc.codigo_cliente, dc.descripcion, dc.precio_paquete, cl.email, vt.tipo_venta, vt.metodo_pago

FROM

  clientes AS cl

INNER JOIN venta AS vt ON cl.codigo_cliente = vt.codigo_cliente

INNER JOIN detalle_compra AS dc ON vt.codigo_cliente=dc.codigo_cliente

WHERE vt.estado='VERIFICADO' and DATE(vt.fecha_compra)=DATE(NOW() + INTERVAL -1 DAY)

HAVING vt.tipo_venta='PAQUETES FOTOS'

order by vt.fecha_compra");

			$row_llegada = "";

			while($row=mysqli_fetch_array($consulta)){



             $row_llegada .= "

			     <tr>



							   <td>".$row['codigo_cliente']."</td>

                 <td>".$row['nombre']." &nbsp; ".$row['apellido']."</td>

                 <td>".$row['email']."</td>

							   <td>".date('d-m-Y', strtotime($row['Fecha']))."</td>

							   <td>".$row['descripcion']."</td>

							   <td>".$row['tipo_venta']."</td>

                 <td>".money_format('%i', $row['precio_paquete']) ."</td>

                 <td>".$row['metodo_pago']."</td>





							   </tr>

							";	



			}



      $consulta1= conectar("SELECT

  cl.codigo_cliente, cl.telefono,

  CONCAT(cl.nombre, ' ', cl.apellido) AS Nombre, cl.email,

  dc.precio_paquete,

  vt.tipo_venta, vt.estado, vt.fecha_compra, dc.descripcion

FROM

  clientes AS cl

INNER JOIN venta AS vt ON cl.codigo_cliente = vt.codigo_cliente

INNER JOIN detalle_compra AS dc ON dc.codigo_cliente = vt.codigo_cliente

WHERE

  vt.estado = 'NO VALIDO' 

AND DATE(vt.fecha_compra)=DATE(NOW() + INTERVAL -1 DAY)

HAVING vt.tipo_venta= 'PAQUETES FOTOS'");

      $row_pendiente= "";

      while($row=mysqli_fetch_array($consulta1)){



             $row_pendiente .= "

           <tr>



                 <td>".$row['codigo_cliente']."</td>

                 <td>".$row['Nombre']."</td>

                 <td>".$row['tipo_venta']."</td>

                 <td>".date("d-m-Y",strtotime($row['fecha_compra']))."</td>

                 <td>".$row['descripcion']."</td>

                 <td>".$row['email']."</td>

                               <td>".$row['telefono']."</td>

                               <td>".$row['precio_paquete']."</td>

                               





                 </tr>";  



      }



///envio de email

//$mailto = "".destinatio_reportenoche()."";

   $mailto ="edwin@berrywhale.com,bknirsch@bavaroadventurepark.com,phototeam@bavaroadventurepark.com,asistconta3@bavaroadventurepark.com,gerenciafinanciera@bavaroadventurepark.com,asistconta5@bavaroadventurepark.com,contabilidad@bavaroadventurepark.com";

$mailsubj = "Reporte Compra Fotos";

$headers = "From: BAVAROADVENTUREPARK <info@bavaroadventurepark.com>\r\n"; 

$headers.= "Content-type: text/html\r\n"; 

$headers .= "Reply-To: info@bavaroadventurepark.com\r\n";   

$mailbody ="

<h1 align='center'>Bavaro Adventure Park</h1>

<h3 align='center'>".mostrarFecha()."</h3>

<h3 align='center'>Compra de Fotos ".$dia_ayer."</h3>

 <table width='95%'  cellpadding='0' border='1px' bordercolor='#eeeeee' style='border-collapse: collapse;'>

  <tr bgcolor='#f6f8f1'>

    <td align='center'><strong>Codigo</strong></td> 

    <td align='center'><strong>Cliente</strong></td>    

    <td align='center'><strong>E-Mail</strong></td>  

    <td align='center'><strong>Fecha Compra</strong></td>

    <td align='center'><strong>Desripcion</strong></td>

    <td align='center'><strong>Tipo Venta</strong></td>

    <td align='center'><strong>Monto Total</strong></td>

    <td align='center'><strong>Pago</strong></td>

  </tr>

".$row_llegada."

</table>

<br>

</table>

<h3>Paquetes fotos No Pagados</h3>

 <table width='95%'  cellpadding='0' border='1px' bordercolor='#eeeeee' style='border-collapse: collapse;'>

  <tr bgcolor='#f6f8f1'>

    <td align='center'><strong>Codigo</strong></td>

    <td align='center'><strong>Cliente</strong></td>

    <td align='center'><strong>Paquete</strong></td>

    <td align='center'><strong>Fecha Compra</strong></td>

    <td align='center'><strong>Descripcion</strong></td>

    <td align='center'><strong>Email</strong></td>

    <td align='center'><strong>Telefono</strong></td>

    <td align='center'><strong>Monto</strong></td>

   



  </tr>

".$row_pendiente."

</table>



<br>



Webmaster<br>



Berry Whale



";



mail($mailto, $mailsubj, $mailbody, $headers);







?>