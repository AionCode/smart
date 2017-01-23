<html>

	<head>
		<title>Session</title>	
	</head>
	
	<body>

		<?php // Pomocu sesije prenosimo jednu nrp. promenljivu iz jednog php fajla u drugi

		session_start(); // prvo ide ovo pa onda ide poziv,taj echo dole

		$_SESSION['skola'] = "Smart";
		$_SESSION['grad'] = "Novi Sad";

		echo "Vrednost 'skola' koja se drzi u sesiji: " . $_SESSION['skola'];
		echo "<hr>";
		echo "Vrednost 'grad' koja se drzi u sesiji: " . $_SESSION['grad'];
		echo "<hr>";


		?>	
		<a href="1801.php" >Session</a><br>
		<a href="1802.php" >skola</a><br>
		<a href="1803.php" >Grad</a><br>


	</body>
</html>