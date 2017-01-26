<?php 

		if ($_POST['broj'] >= 5 and $_POST['broj'] <= 15) {
		for ($i=0; $i <= 15 ; $i++) { 
			if ($i==$_POST['broj']+1) {		// + 1 da bi ispisalo do i sa brojem koji smo uneli
				break;
			}
			echo $i . "<br>";
		}
			echo "<hr>";

		} else {
			echo "Molim vas unesite vrednost od 5 do 15.";
					
?>

<html>

	<head>
		<title>Zadatak01</title>	
	</head>
	
	<body>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >

	<input type="number" name="broj"><br>

	
	<hr>

	<input type="submit" name="submit" value="Posalji">


	</form>


	</body>
</html>

<?php

}

?>	