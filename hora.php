<html>
<head>
	<title></title>
</head>
<body>
<?php
$now = new DateTime();
echo $now->format('Y-m-d H:i:s');    // MySQL datetime format
echo $now->getTimestamp();
$zh = $now->getTimezone();
echo $zh->getName();
  ?>
   
</body>
</html>