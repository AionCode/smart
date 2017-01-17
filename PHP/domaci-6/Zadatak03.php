<html>

	<head>
		<title>Zadatak 3</title>
				<style>

				.b1 {color:#FF0000;}
				.b2 {color:#02be00;}	
				.b3 {color:#FFFF00;}
				.b4 {color:#0000FF;}		
			
		</style>
	</head>
	
	<body>

		<?php 
		// Imamo 2 promenljive: boje i ime. U promenljivu ime unesemo nase ime a u pormenljivu boje unecemo ime boje
		$ime = "Alexandar";
		$boja = "green";
		
		switch ($boja){
			case "red":
				echo "<p class='b1'>". $ime . "</p>";
			break;

			case "green":
				echo "<p class='b2'>". $ime . "</p>";
			break;

			case "yellow":
				echo "<p class='b3'>". $ime . "</p>";
			break;

			case "blue":
				echo "<p class='b4'>". $ime . "</p>";
			break;
			
			default:
			echo "Error";
		}
		
			

		?>
		
	</body>
</html>