<html>

	<head>
		<title>Serverske promenljive</title>	
	</head>
	
	<body>

		<?php 

		echo $_SERVER['PHP_SELF'];  // VRACA NAM IME FAJLA I GDE SE TAJ FAJL NALAZI
		echo "<hr>";

		echo $_SERVER['HTTP_USER_AGENT'];  // VRACA NAM KOJI BROWSER KORISTIMO ILI KOJE BROWSERE KORISTIMO
		echo "<hr>";

		echo basename($_SERVER['PHP_SELF']); // VRACA NAM SAMO IME FAJLA
		echo "<hr>";

		echo dirname($_SERVER['PHP_SELF']); // VRACA NAM SAMO GDE SE NALAZI FAJL
		echo "<hr>";

		foreach ($_SERVER as $k => $v) {
			echo $k . "=> " . $v . "<br>";
		} // LISTA SVE SERVERSKE PROMENLJIVE

		?>	
		
	</body>
</html>