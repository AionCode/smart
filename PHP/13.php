<html>

	<head>
		<title>IF Struktura - granjane</title>	
	</head>
	
	<body>

		<?php 
			//Ovo nam ispisuje sve vrednosti unutar niza
		//$n = array(13,-4,0,98,-79,67,-9,64,18,-59,34);
		//$n = array("ana" , "milan" , "filip");
		$n = array("moj" => "tata" , "tvoja" => "mama");

		foreach ($n as $v) {
			echo $v . ", ";
		}

		echo "<hr>";

		// Ovako ce izgledati: tata, mama



		//Ovo nam ispisuje sve vrednosti ali ce is ispisati kao po koji je broj u nizu => ono sto pise u nizu, bilo to ime ili br itd.
		foreach ($n as $k => $v) {
			echo $k . " => " . $v . "<br>";
		}

		// Ovako ce izgledati:
		// moj => tata  
		// tvoja => mama



		?>	
		
	</body>
</html>