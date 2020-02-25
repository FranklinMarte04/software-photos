<?php 
ini_set('default_charset','utf8');

function conectar($sql) {
   $servidor = "localhost";
   $nombreBD = "bavaroad_bavaroadventurepark";
   $usuario = "bavaroad_avs";
   $contrasena = "Avs26820440";
   $conexion = mysqli_connect($servidor, $usuario, $contrasena, $nombreBD);
   mysqli_query($conexion, "SET NAMES 'utf8'");
   return mysqli_query($conexion, $sql);
}



?>