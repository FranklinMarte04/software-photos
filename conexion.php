<?php
function conectar($sql) {
   $servidor = "localhost";
   $nombreBD = "bavaroin_bavaroa";
   $usuario = "bavaroin_webpage";
   $contrasena = "^@QLh6@*}X&C";
   $conexion = mysqli_connect($servidor, $usuario, $contrasena, $nombreBD);
   mysqli_query($conexion, "SET NAMES 'utf8'");
   return mysqli_query($conexion, $sql);
}