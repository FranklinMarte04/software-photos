<?php

function  formato_moneda($numero, $moneda){
$longitud = strlen($numero);
$punto = substr($numero, -1,1);
$punto2 = substr($numero, 0,1);
$separador = ".";
if($punto == "."){
$numero = substr($numero, 0,$longitud-1);
$longitud = strlen($numero);
}
if($punto2 == "."){
$numero = "0".$numero;
$longitud = strlen($numero);
}
$num_entero = strpos ($numero, $separador);
$centavos = substr ($numero, ($num_entero));
$l_cent = strlen($centavos);
if($l_cent == 2){$centavos = $centavos."0";}
elseif($l_cent == 3){$centavos = $centavos;}
elseif($l_cent > 3){$centavos = substr($centavos, 0,3);}
$entero = substr($numero, -$longitud,$longitud-$l_cent);
if(!$num_entero){
	$num_entero = $longitud;
	$centavos = ".00";
	$entero = substr($numero, -$longitud,$longitud);
}

$start = floor($num_entero/3);
$res = $num_entero-($start*3);
if($res == 0){$coma = $start-1; $init = 0;}else{$coma = $start; $init = 3-$res;}
$d= $init; $i = 0; $c = $coma;
	while($i <= $num_entero){
		if($d == 3 && $c > 0){$d = 0; $sep = ","; $c = $c-1;}else{$sep = "";}
		$final.= $sep.$entero[$i];
		$i = $i+1; // todos los digitos
		$d = $d+1; // poner las comas
	}
	if($moneda == "pesos")  {$moneda = "$";
	return $moneda." ".$final.$centavos;
	}
	elseif($moneda == "dolares"){$moneda = "$";
	return $moneda." ".$final.$centavos;
	}
	elseif($moneda == "euros")  {$moneda = "EUR";
	return $final.$centavos." ".$moneda;
	}
}

function min_date(){

	$consulta="SELECT * FROM mindate";
	$resultado=mysql_query($consulta);
	$fila=mysql_fetch_array($resultado);
	return $fila["dia_minimo"];
}

 function getcodigocliente($emailc) {
      $consulta="SELECT codigo_cliente FROM clientes WHERE email='" . $emailc . "' ORDER BY codigo_cliente DESC LIMIT 1";
   $resultado=mysql_query($consulta);
   $fila=mysql_fetch_array($resultado);   
         return $fila["codigo_cliente"];
      
   }

   function getmontopesos($montoc) {
      $consulta="SELECT tasa FROM tasa WHERE moneda='pesos'";
   $resultado=mysql_query($consulta);
   $fila=mysql_fetch_array($resultado);   
   $tasa = $fila["tasa"];
   $calculo = $tasa * $montoc;
   $calculof = number_format($calculo, 2,'','');
   echo $calculof;
      
   } 



 ?>