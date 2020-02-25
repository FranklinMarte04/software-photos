<html>
<head>
	<title></title>
</head>
<body>
<h1>Detalles Transaccion</h1>
<?php
$id = $_REQUEST['id'];
$cn = $_REQUEST['cn'];
$in = $_REQUEST['in'];
$m = $_REQUEST['m'];
$as = $_REQUEST['as'];
$dt = $_REQUEST['dt'];
$er = $_REQUEST['er'];
$bk = $_REQUEST['bk'];
$cr = $_REQUEST['cr'];
$mn = $_REQUEST['mn'];
$mnm = $_REQUEST['mnm'];
$cnb = $_REQUEST['cnb'];
$exd = $_REQUEST['exd'];
$chn = $_REQUEST['chn'];
$ref = $_REQUEST['ref'];
$agn = $_REQUEST['agn'];
$acc = $_REQUEST['acc'];


?>
<h4>ID: <b><?php echo $id; ?></b></h4>
<h4>Confirmation Number: <b><?php echo $cn; ?></b></h4>
<h4>Invoice Number: <b><?php echo $in; ?></b></h4>
<h4>Ammount: <b><?php echo $m; ?></b></h4>
<h4>Status: <b><?php echo $as; ?></b></h4>
<h4>Date/Time: <b><?php echo $dt; ?></b></h4>
<h4>Error: <b><?php echo $er; ?></b></h4>
<h4>Bank Name: <b><?php echo $bk; ?></b></h4>
<h4>Currency Code: <b><?php echo $cr; ?></b></h4>
<h4>Merchant Number: <b><?php echo $mn; ?></b></h4>
<h4>Merchant Name: <b><?php echo $mnm; ?></b></h4>
<h4>4 Digits Card Number: <b><?php echo $cnb; ?></b></h4>
<h4>Card Expiration Date: <b><?php echo $exd; ?></b></h4>
<h4>Cardholder Name: <b><?php echo $chn; ?></b></h4>
<h4>Reference Field: <b><?php echo $ref; ?></b></h4>
<h4>Agent: <b><?php echo $agn; ?></b></h4>
<h4>Account Number: <b><?php echo $acc; ?></b></h4>



<h4></h4>
</body>
</html>