<html>

	<head>
		<title>Funkcije - Zadatak</title>	
	</head>
	
	<body>

		<?php 
		// Izracunati prosecnu vrednost pozitivnih elemenata niza
		$n = array (5013,-4,0,98,-76,67,-9,64,8018,-59,34);

		$s = 0;
		$b = 0;
		for ($i=0; $i<count($n); $i++) {
			if ($n[$i]>0) {
				$s = $s + $n[$i];
				$b++;
			 }
			;
		}

		$pv = $s / $b ;
		echo "prosek je " . number_format($pv, 2, ","  , ".");
		

		?>	
		
	</body>
</html>