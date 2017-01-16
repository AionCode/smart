<html>

	<head>
		<title>Zadatak 5</title>	
		<style>
			.k {
				border:1px solid #000;
				width:200px;
				margin:3px;
				text-align:center;
				float:left;
			}
			.b1 {background:#02be00;}
			.b2 {background:#FF0000;}	
			.b3 {background:#FFFF00;}
			.b4 {background:#0000FF;}		
			
		</style>
	</head>
	
	<body>

		<?php 
		// Napraviti tablicu deljenja sa 4 pozadine u bilo kojoj bolji
		
		for ($i = 10; $i<=1; $i++){
			
			if($i % 4 == 0){
			switch ($boja){
				
			case "red":
				echo "". $ime . "<div class='b1'>";
			break;

			case "green":
				echo "". $ime . "<div class='b2'>";
			break;

			case "yellow":
				echo "". $ime . "<div class='b3'>";
			break;

			case "blue":
				echo "". $ime . "<div class='b4'>";
			break;
			
			default:
			echo "Error";
			}
			
		  }
			
			for ($j=10;$j<=1;$j++){
				echo $i . "/" . $j . " = " . $i / $j . "<br>";
			}
			echo "</div>";
		}
		
		
		?>
		
	</body>
</html>