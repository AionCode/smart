<?php


?>

<html>

	<head>
		<title>Zadatak01</title>	
	</head>
	
	<body>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >

	<label>a:</label>
	<input type="number" name="broj"><br>

	<label>b:</label>
	<input type="number" name="broj2"><br>

	
	<hr>

	<input type="submit" name="submit" value="Saberi">


	</form>


	</body>
</html>

<?php

	$z = $_POST['broj'] + $_POST['broj2'];
	echo $z;
	echo "<hr>";


?>	