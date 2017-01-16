<html>

	<head>
		<title>Niz</title>	
	</head>
	
	<body>

		<?php 
		// Prebrojati koliko ima pozitivnih elemenata
		$niz = array (13,-4,0,98,-79,67,-9,64,18,-59,34);
		// 13 nije prvi niz vec nulti, znaci treci niz je 98
		
		$n = count($niz);
		$i = 0;
		$b = 0;
		
		while ($i < $n) {
			if ($niz[$i] > 0){
				$b = $b + 1; //$b++
			}
			$i++;
		}
		
		echo "Ima " . $b;
		
		?>
		
	</body>
</html>