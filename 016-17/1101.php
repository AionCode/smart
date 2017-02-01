<html>
	<head>
		<title>While petlja</title>
	</head>
	<body>
  <?php 
  // Sabrati prirodne brojeve sve dok zbir ne bude veći od 100
  
  $i = 0;
  $z = 0;
  while ($z<=100){
    $i = $i + 1;
    $z = $z + $i;
    echo $i . " - " . $z . "<br>";
  }
  
  
  ?>
	</body>
</html>