<html>

	<head>
		<title>Tblica mnozenja</title>	
		<style>
			.k {
				border:1px solid #000;
				width:150px;
				margin:3px;
				text-align:center;
				float:left;
			}
			.b1 {background:#ee0;}
			.b2 {background:#e0e;}	
			.b3 {background:#fff;}
			.b4 {background:#e0e;}		
			
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
				echo $i . "x" . $j . " = " . $i * $j . "<br>";
			}
			echo "</div>";
		}
		
		
		?>
		
	</body>
</html>