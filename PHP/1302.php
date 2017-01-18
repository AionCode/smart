<html>

	<head>
		<title>Multidimenzionalni Niz</title>	
	</head>
	
	<body>

		<?php 


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

		foreach ($tim as $niz) {
			foreach ($niz as $k => $v) {

				echo $k . "=> " . $v . "<br>" ;
				}
		} 

		echo "<hr>";
		
		?>

		<table border=1>
			<tr>
				<th>Ime</th>
				<th>Prezime</th>
				<th>Pol</th>
				<th>Starost</th>
			</tr>

		<?php
		foreach ($tim as $niz) {
			echo "<tr>";
			foreach ($niz as $v) {
				echo "<td>" . $v . "</td>";
			}
			echo "</tr>";
		}


		
		?>	
		</table>

	</body>
</html>