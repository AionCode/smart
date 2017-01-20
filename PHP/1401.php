<html>

	<head>
		<title>Funkcije - kreiranje</title>	
	</head>
	
	<body>

		<?php 
		// Funkcija se koristi kapo promenljiva da se pozove samo sto funkcija kad se pozove moze nesto da uradi.

		function pozdrav (){
			echo "<h1> Dobar dan </h1>";
		}

		pozdrav ();
		echo "<hr>";

		// -------------------- A sada primer kada pozivamo funkciju poz2 i toj funkciji zadajemo vrednost (Aca) 

		function poz2($t) {
			echo "<h2> Dobar dan $t! </h2>";
		}

		poz2("Aca");
		echo "<hr>";

		// -------------------

		function poz3($p) {
			echo "<h3> Dobar dan " . $p . "! </h3>";
		}

		$prez = "Stojanovic";
		poz3 ($prez);
		echo "<hr>";

		// -------------------

		$prez = "Stojanovic";
		$ime = "Aca";

		function poz4($p) {
			global $ime; // Global nam dozvoljava da pozovemo promenljive koje nisu u bloku funkcije, oiz4 je funkcija ne promenljiva, promenljiva je unutar nje!
			echo "<h3> Dobar dan " . $p . " " . $ime . "! </h3>";
		}

		poz4 ($prez);
		echo "<hr>";


		?>	
		
	</body>
</html>