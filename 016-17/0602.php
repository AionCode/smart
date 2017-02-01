<html>
	<head>
		<title>Art. oper.</title>
	</head>
	<body>
  <?php
  // Izracunati EVRO
  $din = 2400;
  define("EVRO",120);
  
  $e = $din/EVRO;
  
  echo "evro " . $e . "<br>";
  
  echo "<hr>";
  // izracunati cm u ince (2.54)
  $cm = 10;
  define("IN",2.54);
  
  $in = $cm/IN;
  
  echo "Vrednost je " . $in;
  
  ?>
	</body>
</html>