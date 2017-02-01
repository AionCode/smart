<html>
	<head>
		<title>Funkcije - Zadatak</title>
	</head>
	<body>
  <?php
  //sabrati elemente niza
  $n = array(5013,-4,0,98,-76,67,-9,64,8018,-59,34);
  
  $s = 0;
  for ($i=0;$i<count($n);$i++){
    $s = $s + $n[$i];
  }  
  echo "Zbij niza je ". $s . "<br>";
  
  $sum = array_sum($n);
  echo "Zbij niza je ". $sum . "<br>";
  
  //prosecna vrednost
  $pv = array_sum($n)/count($n);
  echo "prosek je " . number_format($pv,2,",",".");
  
  
  ?>
	</body>
</html>