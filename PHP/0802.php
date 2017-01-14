<html>

	<head>
		<title>If elseif</title>	
	</head>
	
	<body>

		<?php 
		// Za datu vrednost ispisati koliko ima cifara.
		
		$a = 218;
		
		if ($a >= 0 and $a <= 9){
			echo "jednocifren broj";
		} elseif ($a >= 10 and $a <= 99){
			echo "dvocifren broj";
		} elseif ($a >= 100 and $a <= 999){
			echo "trocifren broj";
		} elseif ($a >= 1000 and $a <= 9999){
			echo "cetvorocifren broj";
		} else {
			echo "Ntocrifren broj";
		}
			
		?>	
		
	</body>
</html>