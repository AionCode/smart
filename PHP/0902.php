<html>

	<head>
		<title>Switch - visestruko granjanje</title>	
	</head>
	
	<body>

		<?php 
		// Za dati mesec prikazati koliko ima dana
		$m = 4;
		
		switch ($m){
			case 1:
			case 3:
			case 5:
			case 7:
			case 8:
			case 10:
			case 12:
				echo 31;
			break;
			
			case 2:
				echo 28;
			break;
			
			case 4;
			case 6:
			case 9:
			case 11:
				echo 30;
			break;
			
			default:
			echo "Error";
		}
		
			

		?>
		
	</body>
</html>