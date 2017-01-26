<?php

	if (empty($_GET["nivo"])) {
		$nivo = 6;
		} else {
			$nivo = $_GET["nivo"];
 		}

?>

<html>

	<head>
		<title>Zadatak03</title>
	</head>
	
	<body>

	<h<?php echo $nivo; ?> >Hello World</h<?php echo $nivo; ?>>


	<hr>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get" >

   		<a href="<?php $_SERVER["PHP_SELF"]; ?>?nivo=1" >h1</a><br>
    	<a href="<?php $_SERVER["PHP_SELF"]; ?>?nivo=2" >h2</a><br>
    	<a href="<?php $_SERVER["PHP_SELF"]; ?>?nivo=3" >h3</a><br>
    	<a href="<?php $_SERVER["PHP_SELF"]; ?>?nivo=4" >h4</a><br>
    	<a href="<?php $_SERVER["PHP_SELF"]; ?>?nivo=5" >h5</a><br>
    	<a href="<?php $_SERVER["PHP_SELF"]; ?>?nivo=6" >h6</a><br>

		
		<hr>


	</form>


	</body>
</html>

