<html>

	<head>
		<title>Niz</title>	
	</head>
	
	<body>

		<?php 
		// elementi niza
		$niz = array (13,-4,0,98,-79,67,-9,64,18,-59,34);
		// 13 nije prvi niz vec nulti, znaci treci niz je 98
		
		//niz bez indexa
		$niz2[] = 45;
		$niz2[] = -5;
		$niz2[] = 0;
		$niz2[] = 78;
		$niz2[] = -8;
		
		//niz sa indexom
		$niz3[5] = 48;
		$niz3[6] = 8;
		$niz3[7] = -9;
		$niz3[8] = 79;
		
		//niz textualni
		
		$niz4 = array("milan", "zoran", "milica");
		
		echo $niz[3] . "<br>";
		echo "<hr>";
		
		for ($i = 0; $i <= 10; $i++){
			echo $niz[$i] . "<br>";
		}
		
		echo "<hr>";
		
		$i = 0;
		while ($i <= 4){
				echo $niz2[$i] . "; ";
				$i++;
		}
		
		echo "<hr>";
		
		$i = 5;
		while ($i <= 8){
				echo $niz3[$i] . "; ";
				$i++;
		}	
		 
		echo "<hr>";

		var_dump($niz);
		echo "<hr>";
		print_r($niz);
		
		?>
		
	</body>
</html>