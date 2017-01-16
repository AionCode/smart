<html>

	<head>
		<title>Multidimenzionalni Niz</title>	
	</head>
	
	<body>

		<?php 
		
		$n = array(6, "petar", 14, array(1,5,25));

		echo $n[3] [1] . "<br>";
		var_dump($n);
		echo "<br>";

		$tim = array (
			array (
			 "ime" => "Aca", 
			 "prezime" => "Stojanovic",
			 "pol" => "m",
			 "statost" => 20,

			 ),
			array (
			 "ime" => "Milica", 
			 "prezime" => "Ristic",
			 "pol" => "z",
			 "statost" => 44,

			 ),
			array (
			 "ime" => "Saban", 
			 "prezime" => "Saulic",
			 "pol" => "m",
			 "statost" => 65,

			 ),

		);
			print $tim [1] ["prezime"];
			echo "<br>";
			print $tim [2] ["ime"];
			echo "<br>";


		
		?>
		
	</body>
</html>