<html>

	<head>
		<title>Switch - visestruko granjanje</title>	
	</head>
	
	<body>

		<?php 
		//Za unetu vrednost prikazati dan u nedelji
		$d = 5;
		
		switch ($d){
			case 1:
				echo "ponedeljak";
			break;
			
			case 2:
				echo "utorak";
			break;
			
			case 3;
				echo "sreda";
			break;
			
			case 4;
				echo "cetvrtak";
			break;
			
			case 5;
				echo "petak";
			break;
			
			default:
			echo "Error";
		}
		
			

		?>
		
	</body>
</html>