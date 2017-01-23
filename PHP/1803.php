<html>

	<head>
		<title>Session - Grad</title>	
	</head>
	
	<body>

		<?php // Pomocu sesije prenosimo jednu nrp. promenljivu iz jednog php fajla u drugi

		session_start();

		echo "Vrednost 'grad' koja se drzi u sesiji: " . $_SESSION['grad'];
		echo "<hr>";
	


		?>	
		<a href="1801.php" >Session</a><br>
		<a href="1802.php" >skola</a><br>
		<a href="1803.php" >Grad</a><br>


	</body>
</html>