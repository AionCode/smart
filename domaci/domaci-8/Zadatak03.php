<html>

	<head>
		<title>Zadatak02</title>	
	</head>
	
	<body>

			 <table border=1>
			<tr>
				<th>Ime</th>
				<th>Prezime</th>
				<th>Pol</th>
				<th>Starost</th>
			</tr>


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
			 "pol" => "z",
			 "starost" => 18,

			 ),

		);

			echo "<hr>";

		foreach ($tim as $niz ) {
			echo "<tr>";
			foreach ($niz as $v) {
				echo "<td>" . $v . "</td>";
			}
			echo "</tr>";
		}

		
		?>
		
	</body>
</html>