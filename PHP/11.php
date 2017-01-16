<html>

	<head>
		<title>While</title>	
	</head>
	
	<body>

		<?php 
		$b = 0;
		while ($b < 5) {
			$b = $b +1;
			echo $b. "<br>";
		}
		echo "<hr>";
		
		$b = 0;
		do {
			$b = $b +1;
			echo $b. "<br>";
		} while ($b < 5);
		
		echo "<hr>";
		
		?>
		
	</body>
</html>