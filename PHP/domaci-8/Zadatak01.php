<html>

	<head>
		<title>Niz</title>	
	</head>
	
	<body>

		<?php 
		// Sortirati niz da bude u rastucemen redosledu.
		$n = array (13,-4,0,98,-79,67,-9,64,18,-59,34);
		asort ($n);
		
		foreach ($n as $k) {
			echo $k ."<br>";
		}
		
		?>
		
	</body>
</html>