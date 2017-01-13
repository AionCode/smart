<html>

	<head>
		<title>Zadatak 1</title>	
	</head>
	
	<body>
	
		<?php
			
			// Izracunati obim (O= 2 * r * π) i povrsinu (P= π * r**2 ) kruga
			
			$r = 3;
			define("π", 3.14);
			
			$o =  2 * $r * π;			
			$p = π * $r ** 2;
			
			echo "Obim je " . $o . "<br>";
			echo "Površina je " . $p . "<br>";
			echo "<hr>";
				
		
		
		?>
		
	</body>
</html>