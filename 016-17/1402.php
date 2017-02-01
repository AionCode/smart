<html>
	<head>
		<title>Funkcije</title>
	</head>
	<body>
  <?php
  // sabiranje
  function saberi($a,$b){
    echo $a + $b;
  }
  
  saberi(12,33);
  echo "<hr>";
  
  $s = 24;
  $t = 11;
  saberi($s,$t);
  echo "<hr>";
  
  saberi(3,5);
  echo "<hr>";
  
  // vrsi sabiranje i vraca vrednost
  function saberi2($a,$b){
    $c = $a + $b;
    return $c;
  }
  
  echo saberi2(3,5);
  echo "<hr>";
  
  echo saberi2(13,25);
  echo "<hr>";
  
  // sabira i vraca vrednost
  // domet vazenja varijable
  $d = 20;
  function saberi3($a,$b){
    //$d = 10;
    global $d;
    $c = ($a + $b) * $d;
    return $c;
  }
  
  echo saberi3(2,4);
  echo "<hr>";
  
  
  // sabira i vraca vrednost
  // domet vazenja varijable
  $d = 20;
  function saberi4($a,$b){
    $d = 10;
    $c = ($a + $b) * $GLOBALS['d'];
    return $c;
  }
  
  echo saberi4(2,4);
  echo "<hr>";
  
  
  
  ?>
	</body>
</html>