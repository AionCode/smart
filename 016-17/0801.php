<html>
	<head>
		<title>Logicki operatori AND OR NOT</title>
	</head>
	<body>
  <?php
  $a=5;
  $b=3;
  $c=4;
  
  
  // AND &&
  if(($a > $b) and ($a > $c)){
    echo $a;
  }
  
  if(($b > $a) && ($b > $c)){
    echo $b;
  }
  
  if(($c > $a) and ($c > $b)){
    echo $c;
  }
  
  echo "<hr>";
  
  // OR  ||
  if ($a > $b or $a > $c){
    echo "Promenljiva a je veće od b ili c.";
  }
  
  
  ?>
	</body>
</html>