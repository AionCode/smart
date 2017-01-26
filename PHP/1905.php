<?php

if (isset($_POST['submit'])) {
	if (empty($_POST["boja"])) {
		$_POST["boja"]= "#FF0";
	}else{
		$b = $_POST["boja"];
	}

}

?>

<html>

	<head>
		<title></title>	
	</head>
	
	<body>

	<h1 style="color:<?php echo $_POST["boja"] ?>;" >Novi Sad</h1>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >

		<label>Boja:</label>
		<input type="color" name="boja" value="<?php echo $b; ?>"><br>

		<hr>

		<input type="submit" name="submit" value="Primeni">


	</form>


	</body>
</html>

