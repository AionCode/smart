<html>

	<head>
		<title>Funkcije -String</title>	
	</head>
	
	<body>

		<?php 

		$t = "smart skola";

		echo $t;
		echo "<hr>";
		echo strlen($t) . "<br>";

		
		if (strstr($t,"sko")) {
			echo "Pronasao " . "<br>";
		} else {
			echo "Nije pronasao" . "<br>";
		}

			

		echo "<hr>";

		echo strpos($t, " ") . "<br>";
		echo strpos($t, "k") . "<br>";

		echo "<hr>";

		echo substr($t, 4) . "<br>" ;
		echo substr($t, 3,5) . "<br>" ;
		echo substr($t, 0,5) . "<br>" ;
		echo substr($t, -5) . "<br>" ;

		echo "<hr>";

		$t = " smart ";
		echo strlen($t) . "<br>";
		$t1 = trim($t);
		echo strlen($t1) . "<br>";

		echo "<hr>";

		$s = "as06iore";
		echo $s . "<br>";
		$s1 = substr_replace($s,"78",2,2);
		echo  $s1 . "<br>";


		?>	
		
	</body>
</html>