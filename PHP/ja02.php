<html>

	<head>
		<title>IF - operator poredjenja</title>	
	</head>
	
	<body>

		<?php 
		echo "Hello Please enter a color (red,blue or green) or a number from 1 to 9, and I will tell you what you have entered, I know I'm a stupid program. <hr>";

		$x = "6";

		if ($x >= 10)
			echo "You have entered a number larger than 9. <br>";


		switch ($x) {
			case 'red':
				echo "The color you have entered is red.";
			break;

			case 'blue':
				echo "The color you have entered is blue.";
			break;

			case 'green':
				echo "The color you have entered is green.";
			break;

			case 1:
			case 2:
			case 3:
			case 4:
			case 5:
			case 6:
			case 7:
			case 8:
			case 9:			
				echo "You have entered a number from 1 to 9.";
			break;

			default:
				echo "Please enter a color (red,blue or green) or a number from 1 to 9.";
				break;
		}

			echo "<hr>";

							
		?>	
		
	</body>
</html>