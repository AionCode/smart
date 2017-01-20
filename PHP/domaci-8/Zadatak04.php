<html>

	<head>
		<title>IF Struktura - granjane</title>	
	</head>
	
	<body>

		<?php  
			// ZA DOMACI PREBROJATI KOLIKO IMA TEXTUALNIH VREDNOSTI, BROJCANIH I NIZOVA
		$n = array(13,-4,"ana" , 0, array(23,"aa"), 98,"milan",-79,67,-9,64, array(36, -79, "ee"), "filip", 18,-59,34);



		foreach ($n as $v) {
			if (is_numeric($v)) {
			echo "$v je broj. <br>";
		}

   		$count+= count($v);
		}

		echo "<hr>";
		
		//

		foreach ($n as $v) {
			if (is_string($v)) {
			echo "$v je text. <br>";
		}

   		$count+= count($v);
		}

		echo "<hr>";

		//

		foreach ($n as $v) {
			if (is_array($v)) {
			echo "$v je niz. <br>";
		}

   		$count+= count($v);
		}

		echo "<hr>";

		//



		?>	
		
	</body>
</html>