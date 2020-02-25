<html>
<head>
	<title></title>
</head>
<body>
<h1>Transaccion Exitosa</h1>
<?php
$respuesta = $_POST['ResponseCode'];
$transaccion = $_POST['TransactionID'];
$remoto = $_POST['RemoteResponseCode'];
$codigoautorizacion = $_POST['AuthorizationCode'];
$referencia = $_POST['RetrivalReferenceNumber'];
$codigoc = $_POST['codigoc'];

?>
<h4>El Codigo de Respuesta es: <b><?php echo $respuesta; ?></b></h4>
<h4>El Numero de Transaccion es: <b><?php echo $transaccion; ?></b></h4>
<h4>El codigo remoto es: <b><?php echo $remoto; ?></b></h4>
<h4>El codigo de autorizacion es: <b><?php echo $codigoautorizacion; ?></b></h4>
<h4>La referencia es: <b><?php echo $referencia; ?></b></h4>
<h4>El Codigo del Cliente es: <b><?php echo $codigoc; ?></b></h4>


<h4></h4>
</body>
</html>