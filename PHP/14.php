<html>

	<head>
		<title>Funkcije - PHP</title>	
	</head>
	
	<body>

		<?php 
		$b = -321;
		$nb = abs($b); // abs prebacuje iz negativnog u poz.
		echo $nb; // funkcija uvek vraca jednu vrednost(to moze biti i niz).
		echo "<hr>";

		$niz = array(2,5,78,9);
		$max = max($niz);
		$min = min($niz);
		echo "najveca je " . $max . ", najmanja je " . $min;
		echo "<hr>";

		$s = array_sum($niz);
		echo "ukupno: " . $s;
		echo "<hr>";

		$t = "Smart ";
		if (is_string($t)){
			echo "$t je text. <br>";
		}

		//  Proverava da li je probenljiva broj tj. numericka
		$b = 12;
		if (is_numeric($b)) {
			echo "$b je broj. <br>";
		}

		// Proverava da li postoji promenljiva 
		if(isset($a)){        
			echo "postoji";
		} else {
			echo "ne postoji";
		}


		?>	
		
	</body>
</html>