<html>

	<head>
		<title>Tablica deljenja</title>	
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
			.b4 {background:#800000;}		
			
		</style>
	</head>
	
	<body>

		<?php 
		
		for ($i = 1; $i<=10; $i++){
			
			if($i % 2 == 0){
				echo "<div class='k b1'>";
			} else {
				echo "<div class='k b2'>";
			}
			
			for ($j=1;$j<=10;$j++){
				echo $i . "/" . $j . " = " . $i / $j . "<br>";
			}
			echo "</div>";
		}
		
		
		?>
		
	</body>
</html>