<html>

	<head>
		<title>Zadatak 1</title>	
	</head>
	
	<body>

		<?php 
		// Za unete vrednosti a, b i c prikazati ih u rastucem redosledu.

		$a = 2;
		$b = 13;
		$c = 4;

		if ($a < $b and $a < $c){
			echo . $a .;
		} elseif ($a >= 10 and $a <= 99){
			echo "dvocifren broj";
		} elseif ($a >= 100 and $a <= 999){
			echo "trocifren broj";
		} elseif ($a >= 1000 and $a <= 9999){
			echo "cetvorocifren broj";
		} else {
			echo "Ntocrifren broj";
		}
		
		$max = $a;
		if ($b < $a and $c < $a and $c < $b) {
			echo . $c . ;
		} else {

		}
		if ($b < $a and $c < $a and $c < $b) {
			$max = $c;
		}
		echo "Najvece je " . $max;

		/*

		$a = 5;
		$b = 8;
		$c = 3;
		
		//AND &&
		if (($a > $b) and ($a > $c)){
			echo $a;
		}

		if (($b > $a) and ($b > $c)){
			echo $b;
		}

		if (($c > $a) and ($c > $b)){
			echo $c;
		}		
		
		echo "<hr>";

		//OR ||
		if ($a > $b or $a > $c){
			echo "Promenljiva a je veca od b ili c.";
		}
		
		*/
		
		?>
		
	</body>
</html>