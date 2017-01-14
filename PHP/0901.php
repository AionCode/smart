<html>

	<head>
		<title>Switch - visestruko granjanje</title>	
	</head>
	
	<body>

		<?php 
		
		$z = "ne";
		
		switch ($z){
			case "da":
				echo "Drago mi je";
			break;
			
			case "ne":
				echo "Zao mi je";
			break;
			
			case "mozda";
				echo "Trudimo se";
			break;
			
			default:
			echo "Error";
		}
		
			

		?>
		
	</body>
</html>