<html>

	<head>
		<title>Zadatak 1</title>
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
		$boja = "red";
		
		switch ($boja){
			case "red":
				echo "". $ime ."<div class='b1'>";
			break;

			case "green":
				echo "". $ime ."<div class='b2'>";
			break;

			case "yellow":
				echo "". $ime ."<div class='b3'>";
			break;

			case "blue":
				echo "". $ime ."<div class='b4'>";
			break;
			
			default:
			echo "Error";
		}
		
			

		?>
		
	</body>
</html>