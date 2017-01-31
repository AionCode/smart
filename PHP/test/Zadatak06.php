<html>

	<head>
		<title>Zadatak06</title>	
	</head>
	
	<body>

		<?php 
		// Napravi program koji izlistava sve parne brojeve u nizu
		$niz = array (13,4,5,7,46,8,3);

		$n = count($niz);

		
		for ($i = 0; $i< $n; $i++){

			if ($niz[$i] % 2 ==0) {
				echo  $niz[$i] . "<br>" ;
			}
			
		}
		
		?>
		
	</body>
</html>