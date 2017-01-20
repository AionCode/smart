<html>

	<head>
		<title>Zadatak01</title>	
	</head>
	
	<body>

		<?php 
		// Treba pronaci najmanju razliku aritmeticke sredine niza. Na kojoj poziciji se on nalazi (uraditi kroz primer 1202.php).
		$niz = array (13,-4,0,98,-79,67,-9,64,18,-59,34);
		// 13 nije prvi niz vec nulti, znaci treci niz je 98
			$n = count($niz); // brojac elementa u nizu
			$i = 0;	// brojac
			$z = 0; // zbir
			$as = 0; //aritmeticka sredina
			$nr = array(); // niz razlika
			$small = 100; // pomocna za pronalazenje najmanje razlike
			$j = 0; // pomocna za cuvanje pozicije najmanjeg elementa
								
			//Trazenje aritmeticke sredine
			while($as<=$n){
				$i = $i + 1;
				$z = $z + $i;
				$as = $z / $i;
				}
				echo "<p class='resenje'>Aritmeticka sredina niza je " . $as . "</p><br/>";
								
				//Pravljenje pomocnog niza sa vrednostima razlike aritmeticke sredine i elementa i trazenje najmanje razlike
			for ($i=0; $i<$n; $i++){
				$nr[$i] = abs($as-$niz[$i]);
				if($small>$nr[$i]){
				$small = $nr[$i];
				$j = $i;
				}
			}
			
			echo "<p class='resenje'>Najmanja razlika izmedju aritmeticke sredine i elementa niza je " . $small . ", a sam element se nalazi na poziciji " . $j . " u nizu</p>";
			
		?>
		
	</body>
</html>