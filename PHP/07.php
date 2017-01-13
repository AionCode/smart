<html>

	<head>
		<title>IF Struktura - granjane</title>	
	</head>
	
	<body>

		<?php 
			$b = true;
			
			if ($b)
				{
					echo "Tacno <br>";			
				}
			echo "kraj <br>";
			
			echo "<hr>";
			
			// drugi primer
			$t = true;
			if ($t)
				{
					echo "Tacno <br>";
				}
			else				
				{
					echo "Ne tacno <br>";
				}	
			
			echo "kraj <br>";
			
			echo "<hr>";
		
			// drugi primer - skraceno
			$t = false;
			if ($t){
					echo "Tacno <br>";
				} else {
					echo "Ne tacno <br>";
				}	
			
			echo "kraj <br>";
			
			echo "<hr>";
				
		
		?>	
		
	</body>
</html>