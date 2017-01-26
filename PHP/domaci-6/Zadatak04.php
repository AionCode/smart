<html>

	<head>
		<title>Zadatak 4</title>

	</head>
	
	<body>

		<?php 

		$a = 1;
		$b = 6;
		$c = 1;
		$x1 = 0;
		$x2 = 0;
							 
		 $d = $b*$b - 4*$a*$c;
			echo "<p>". $a ."x&sup2 + " . $b . "x + $c = 0</p><br/>";
			echo "<p>Resenje:</p><br/>";
							 
		 if($d<=0){
			echo "<p class='resenje'>Kvadratna jednacina nema realna resenja!</p>";
			 }
		elseif($a == 0){
		 $x1 = -$b/$c;
			 echo "<p>Jednačina se rešava po formuli: <b>x= -b/c </b></p>";
			echo "<p class='resenje'>Jednacina ima samo jedno resenje: x = $x1</p>";
			}
		elseif ($d == 0){
		 $x1 = -$b/(2*$a);
			 echo "<p>Jednačina se rešava po formuli: <b>x= -b/(2a) </b></p>";
			echo "<p class='resenje'>Jednacina ima samo jedno resenje: x = $x1</p>";
		 } else {
			$x1 = (-$b + sqrt($b** - 4*$a*$c))/(2*$a);
			$x2 = (-$b - sqrt($b** - 4*$a*$c))/(2*$a);
			echo "<p>Jednačina se rešava po formulama: <b>x<sub>1</sub>= -b +  &#8730(b&sup2-4ac)/(2a) i x<sub>2</sub>= -b -  &#8730(b&sup2-4ac)/(2a) </b></p>";	
			echo "<p class='resenje'>Kvadratna jednacina ima resenja: x<sub>1</sub> = $x1 i x<sub>2</sub> = $x2</p>";								

		?>
		
	</body>
</html>