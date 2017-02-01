<html>
	<head>
		<title>Funkcije - PHP</title>
	</head>
	<body>
  <?php
  $b = -321;
  $nb = abs($b);
  echo $nb;
  echo "<hr>";
  
  $niz = array(2,5,78,9);
  $max = max($niz);
  $min = min($niz);
  echo "najveća je " . $max . ", najmanja je " . $min;
  echo "<hr>";
  
  $s = array_sum($niz);
  echo "ukupno: " . $s;
  echo "<hr>";
  
  $t = "Smart";
  if (is_string($t)){
    echo "$t je tekst<br>";
  }
  
  $b = 12;
  if (is_numeric($b)){
    echo "$b je broj.<br>";
  }
  
  if(isset($b) and isset($a){
    echo "postoji";
  } else {
    echo "ne postoji";
  }


  
  ?>
	</body>
</html>