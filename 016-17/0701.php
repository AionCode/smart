<html>
	<head>
		<title>IF - operator poredjenja</title>
	</head>
	<body>
  <?php
  //Provera da li je broj pozitivan
  $broj = -10;
  if ($broj > 0){
    echo "Pozitivan";
  } else {
    echo "Negativan";
  }
  
  echo "<hr>";
  
  //prikazati vecu vrednost
  $a = 5;
  $b = 12;
  
  if ($a > $b){
    echo "A je veće";
  } else {
    echo "A nije vece";
  }
  
  echo "<hr>";
  
  //jednake vrednosti
  $c = 3;
  $d = 3;
  
  if($c === $d){
    echo "jednaki";
  } else {
    echo "nisu";
  }
  
  ?>
  
	</body>
</html>