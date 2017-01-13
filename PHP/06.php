<html>

	<head>
		<title>Osnove aritmetičke operacije</title>	
	</head>
	
	<body>
	
		<?php 
			// opetrator dodele
			
			$a = 5;
			$b = 15;
			
			// operator za znakovni niz (.)
		
			echo "a = " . $a . "<br>";
			echo "b = " . $b . "<br>";
				
			// sabiranje
			
			$c = $a + $b;
			echo "Zbir je " . $c . "<br>";
			
			// oduzimanje
			
			$c = $a - $b;
			echo "Razlika je " . $c . "<br>";
			
			// mnozenje
			
			$c = $a * $b;
			echo "Proizvod je " . $c . "<br>";			
	
			// kolicnik
			
			$c = $a / $b;
			echo "Kolicnik je " . $c . "<br>";	
		
			// ostatak - kad se zavrsi deljenje odbacuje se dobitak i gleda se ono sto je ostalo
			
			$c = $a % $b;
			echo "Ostatak je " . $c . "<br>";
			
			
			// dodaj jedan - imkrementacija
			$a = $a + 1;
			echo "Rezultat " . $a . "<br>"; // ovde PISE "a" ne "c" zato je reultat 6
			
			
			// dodaj jedan - i ovde ce biti 7 jer smo vec dodali gore 1 na "a" 
			
			$a++;
			echo "Rezultat " . $a . "<br>";		
		
			//navodnici
			
			echo "$a + $b = $c <br>";
			echo '$a + $b = $c <br>';
			
			
		
		?>
		
	</body>
</html>