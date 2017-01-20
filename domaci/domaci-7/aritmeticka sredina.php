<html>

	<head>
		<title>Zadatak01</title>	
	</head>
	
	<body>

		<?php 
		// Treba pronaci najmanju razliku aritmeticke sredine niza. Na kojoj poziciji se on nalazi (uraditi kroz primer 1202.php).
		$niz = array (13,-4,0,98,-79,67,-9,64,18,-59,34);
		// 13 nije prvi niz vec nulti, znaci treci niz je 98
		echo "Zbir niz-a je " . array_sum($niz) ;
		echo "<hr>";
		
		$n = count($niz);
		$as = 0;

			$as = array_sum($niz) / $n;

		echo "Aritmeticka sredina je " . $as ;
		
		?>
		
	</body>
</html>