<html>

	<head>
		<title>Varijable</title>	
	</head>
	
	<body>

		<?php 
			// integer
			$a = 125;
			// float - double
			$b  = 12.456;
			echo "a =" . $a . "<br>";
			echo "b =" . $b . "<br>";
			
			
			// string
			$ime = "Aleksandar";
			$prezime = "Stojanovic";
			
			echo "<p>" . $ime . " " . $prezime . "</p>";
			
			// boolean
			$istina = true;
			var_dump($istina);
			
			// array - niz
			$n = array(23, 34, 56, 18);
			var_dump($n);
			print_r($n);
			
			echo "<hr>";
			
			// ime varijable
			$var = "Smart ";
			$Var = "Novi Sad";
			echo $var;
			echo $Var;
			
			echo "<hr>";
			
			// echo sa duplim navodnicima 
			echo "$Var";
			echo "<br>";
			
			// echo sa duplim navodnicima
			echo '$Var';
			echo '<br>';
			
		?>
		
	</body>
</html>