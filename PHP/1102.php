<html>

	<head>
		<title>While petlja</title>	
	</head>
	
	<body>

		<?php 
		// Sabrati prirodne brojeve sve dok aritmeticka sredina bude veca od 50
		$i = 0;
		$z = 0;
		$as = 0;
		
		while ($as <= 50) {
			$i = $i + 1;
			$z = $z + $i;
			$as = $z / $i;
			echo $i . " - " . $z;
		}
		
		// echo stavljamo ili u petlju ili van , ako stavimo u petlju ispisace za svaki red sta je uradio, a ako stavimo van petlje ispisace samo rezultat na kraju
		
		?>
		
	</body>
</html>