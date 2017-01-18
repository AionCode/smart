<html>

	<head>
		<title>Zadatak03</title>	
	</head>
	
	<body>

		<?php 
		//Niz koji napravimo da izlista samo po jednu vrednost koju zadamo (po primeru 1211.php) Sa foreach petljom da procita sve to u njoj i  petlju i uslov da izadje je da ispise npr. neko prezime.

		$tim = array (
		
			 "ime" => "Aca", 
			 "prezime" => "Stojanovic",
			 "pol" => "m",
			 "statost" => 20,

		);
			print $tim ["prezime"];
			echo "<hr>";
		
			foreach ($tim as $a => $vrednost){
			echo $a . "=> " . $vrednost. "<br>";
		}

		
		?>
		
	</body>
</html>