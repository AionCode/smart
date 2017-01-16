<html>

	<head>
		<title>While</title>	
	</head>
	
	<body>

		<?php 
		// Sabrati prirodne brojeve sve dok zbir ne bude veci od 100
		$i = 0;
		$z = 0;
		while ($z <= 100) {
			$i = $i + 1;
			$z = $z + $i;
			echo $i . " - " . $z;
		}
		
		// echo stavljamo ili u petlju ili van , ako stavimo u petlju ispisace za svaki red sta je uradio, a ako stavimo van petlje ispisace samo rezultat na kraju
		
		?>
		
	</body>
</html>