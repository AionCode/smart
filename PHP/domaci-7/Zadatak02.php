<html>

	<head>
		<title>Zadatak02</title>	
	</head>
	
	<body>

		<?php 
		// Na osnovu primera 1211.php napraviti svoj niz. U okviru $tim promenljive Najmanje 4 ili 5 promenljivih a nizova 3 ili 4.		

		$tim = array (
			array (
			 "ime" => "Aca", 
			 "prezime" => "Stojanovic",
			 "pol" => "m",
			 "starost" => 20,

			 ),
			array (
			 "ime" => "Milica", 
			 "prezime" => "Ristic",
			 "pol" => "z",
			 "starost" => 44,

			 ),
			array (
			 "ime" => "Saban", 
			 "prezime" => "Saulic",
			 "pol" => "m",
			 "starost" => 65,

			 ),
			array (
			 "ime" => "Darko", 
			 "prezime" => "Kostic",
			 "pol" => "m",
			 "starost" => 32,

			 ),
			 array (
			 "ime" => "Jelena", 
			 "prezime" => "Savic",
			 "pol" => "m",
			 "starost" => 18,

			 ),

		);
		
			//Zadatak 03 - Niz iz Zadatka 2 neka izlista samo po jednu zadatu vrednost.
			$n = count($tim);

             for ($i=0; $i<$n; $i++){
                echo $tim[$i]["ime"] . "<br>";
              }
              	echo "<hr>";

		
		?>
		
	</body>
</html>