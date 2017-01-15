<html>

	<head>
		<title>Zadatak03</title>	
	</head>
	
	<body>
	
		<?php 
		// Napisati program koji prevodi tezinu iz funtu u kilograme
		echo "Ako imamo 6 funti treba izracunati koliko je to u kg.";
		echo "<br>";
		echo "<hr>";
		
		$f = 6;	
		define ("FUNTA", 400);
		
		$g = $f * FUNTA;	
		echo " 6 Funti je " . $g . "g"; 
		echo "<br>";
		echo"<hr>";
		
		$kg = $g / 1000;
		echo " Znaci 6 funti je " . $kg . "kg";
		echo "<br>";
		echo " <hr>";
		
		?>	
		
	</body>
</html>