<html>
	<head>
		<title>While petlja</title>
	</head>
	<body>
  <?php 
  // Sabrati prirodne brojeve sve dok aritmetička sredina bude veći od 50
  
  $i = 0;
  $z = 0;
  $as = 0;
  while ($as<=50){
    $i = $i + 1;
    $z = $z + $i;
    $as = $z / $i; 
    echo $i . " - " . $z . " - " . $as . "<br>";
  }
  
  
  ?>
	</body>
</html>