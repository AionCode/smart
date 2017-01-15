<html>

	<head>
		<title>IF - operator poredjenja</title>	
	</head>
	
	<body>

		<?php 
		
			// Provera da li je broj pozitivan
			
			$broj = 10;
			if ($broj > 0){ 
					echo "Pozitivan <br>";
				} else {
					echo "Negativan <br>";
				}	
			
			echo "<hr>";
				
				//Prikazati vecu vrednost
				$a = 5;
				$b = 2;
				
				if ($a > $b) {
						echo "A je vece";
					} else {
						echo "B je vece";
					}
					
					echo "<hr>";
					
					//Jednake vrednosti
				$a = 3;
				$b = 3;
				
				//  kada imamo "===" znaci da proverava da li su jednaki i da li su istog tipa, a ako imamo "!=" onda proveravamo da li su razliciti
				
				if ($a === $b) {
						echo "Jednako";
					} else {
						echo "Nejednako";
					}
					
					echo "<hr>";
							
		?>	
		
	</body>
</html>