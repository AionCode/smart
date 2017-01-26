<?php
	if (empty($_GET["boja"])) {
		$boja = "ffff00";
	} else {
		$boja = $_GET["boja"];
	}

?>


<html>

	<head>
		<title>Linkovi - GET</title>	
	</head>
	
	<body bgcolor="#<?php echo $boja; ?> ">
	
		<a href="20.php?boja=0000ff">Plava</a><br>
		
		<a href="20.php?boja=ff0000">Crvena</a><br>

		<a href="<?php $_SERVER["PHP_SELF"]; ?>?boja=00ff00">Zelena</a><br>
		
	</body>
</html>