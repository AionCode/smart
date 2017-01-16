<html>

	<head>
		<title>Niz</title>	
	</head>
	
	<body>

		<?php 
		// Izracunati prosecnu vrednost niza
		$niz = array (13,-4,0,98,-79,67,-9,64,18,-59,34);
		// 13 nije prvi niz vec nulti, znaci treci niz je 98
		
		$n = count($niz);
		$s = 0;
		for ($i = 0; $i < $n; $i++){
			$s = $s + $niz[$i];
		}
		
		echo "Prosek je " . $s/$n;
		
		?>
		
	</body>
</html>