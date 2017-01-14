<html>

	<head>
		<title>Npisati program koji za uneti prirodan broj proverava da li je paran.</title>	
	</head>
	
	<body>

		<?php 
		
			// Provera da li je broj pozitivan
			echo "Zadati broj je 15";
			
			$a = 15 ; 
			
			echo "<br>";
			
			$broj = $a % 2;
			
			if ($broj > 0 ){ 
					echo "Je neparan <br>";
				} else {
					echo "Je paran <br>";
				}	
			
			echo "<hr>";
				
							
		?>	
		
	</body>
</html>