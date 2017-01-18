<html>

	<head>
		<title>IF Struktura - granjane</title>	
	</head>
	
	<body>

		<?php  
			//Ovo nam ispisuje sve vrednosti unutar niza
		$n = array(13,-4,"ana" , 0, array(23,"aa"), 98,"milan",-79,67,-9,64, array(36, -79, "ee"), "filip", 18,-59,34);


		foreach ($n as $k => $v) {
			if (is_array($v)) {
				foreach ($v as $k1 => $v1) {
					echo $k1 . "=> " . $v1 . "<br>" ;
				}
			} else {
			echo $k . " => " . $v . "<br>";
		}

	}

		// ZA DOMACI PREBROJATI KOLIKO IMA TEXTUALNIH VREDNOSTI, BROJCANIH I NIZOVA


		?>	
		
	</body>
</html>