<html>
	<head>
		<title>For petlja</title>
	</head>
	<body>
  <?php
  //Izracunati prosecnu vrednost prvih 15 prirodnih brojeva
  
  $s = 0;
  $n = 45;
  for ($i=1;$i<=$n;$i++){
    $s = $s + $i;
  }
  
  $p = $s/$n;
  echo "prosek je " . $p;
  
  ?>
	</body>
</html>