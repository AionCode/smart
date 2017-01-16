<html>

	<head>
		<title>For petlja</title>	
	</head>
	
	<body>

		<?php 
		//Izracunati prosecnu vrednost prvih 15 prirodnih brojeva
		$s = 0;
		$n = 15;
		for ($i = 1; $i<= $n; $i++){
				$s = $s + $i;
		}
		
		$p = $s/$n;
		echo "prosek je " . $p;
		
		echo "<hr>";
		
		//Napisati program koji se nalazi proizvod prvih 10 prirodnih brojeva
		
		$s = 1;
		for ($i = 1; $i<= 10; $i= $i+1){
				$s = $s * $i;
		}
		
		echo "proizvod brojeva je " . $s;
		
		?>
		
	</body>
</html>