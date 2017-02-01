<html>
	<head>
		<title>Aritmetičke operacije</title>
	</head>
	<body>
  <?php
    // Izracunati obim i površinu pravougaonika.
    $a = 3;
    $b = 5;
    
    $o = 2 * $a + 2 * $b;
    $p = $a * $b;
  
    echo "Obim je " . $o . "<br>";
    echo "Površina je " . $p . "<br>";
    echo "<hr>";
    
    // Izracunati obim i površinu kvadrate
    $a = 7;
    
    $o = 4 * $a;
    $p = $a ** 2;
  
    echo "Obim je " . $o . "<br>";
    echo "Površina je " . $p . "<br>";
    echo "<hr>";
  ?>
	</body>
</html>