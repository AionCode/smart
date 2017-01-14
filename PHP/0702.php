<html>

	<head>
		<title>If - zadatak</title>	
	</head>
	
	<body>

		<?php
		//Za vrednosti A, B i C prikazati najvecu
		
		$a = 2;
		$b = 3;
		$c = 4;
		
		if ($a > $b){
			if ($a > $c){
				echo $a;
			}	else{
				echo $c;
			}
		} else {
			if ($b > $c) {
				echo $b;
			}else{
				echo $c;
			}
		} 
		echo "<hr>";
		// Drugi nacin
		
		$a = 2;
		$b = 13;
		$c = 4;
		
		$max = $a;
		if ($b > $max) {
			$max = $b;
		}
		if ($c > $max) {
			$max = $c;
		}
		echo "Najvece je " . $max;

		
		?>
		
	</body>
</html>