<html>

	<head>
		<title>Funkcije</title>	
	</head>
	
	<body>

		<?php 
		// Funkcija se koristi kapo promenljiva da se pozove samo sto funkcija kad se pozove moze nesto da uradi.

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

		// Izvrsi sabiranje i vracaj vrednost =  OVO JE BOLJE RESENJE 

		function saberi2 ($a,$b) {
			$c = $a + $b;
			return $c;
		}

		echo saberi2(6,5);
		echo "<hr>";

		echo saberi2(9,8);
		echo "<hr>";

		// Sabira i vraca vrednost
		// domet vazenja varijable
		$d = 20; // ova nece biti uzeta jer ako nema global pozivanja

		function saberi3 ($a,$b){
			$d = 10;
			$c = ($a + $b) * $d ;
			return $c;
		}

		echo saberi3(2,4);
		echo "<hr>";

		//

		$d = 20; // ova nece biti uzeta jer ako nema global pozivanja

		function saberi4 ($a,$b){
			$d = 10;
			$c = ($a + $b) * $GLOBALS['d'] ;
			return $c;
		}

		echo saberi4(2,4);
		echo "<hr>";


		?>	
		
	</body>
</html>