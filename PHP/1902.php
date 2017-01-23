<?php

if (isset($_POST['submit'])) {
	if ($_POST['ime']=="") {
		echo "Morate uneti ime.";
	} else {
		echo "Dobar dan " . $_POST['ime'] . "<br>";
		echo "Komentar " . $_POST['komentar'] . "<br>";	
		
	}

	echo "<hr>";
	
} else {

?>

<html>

	<head>
		<title></title>	
	</head>
	
	<body>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >

	<label>Ime i prezime:</label>
	<input type="text" name="ime"><br>

	
	<hr>

	<label>Poruka:</label><br>
	<textarea name="komentar" rows="8" cols="25" placeholder="Unesite zeljeni tekst..."></textarea>

	<hr>

	<input type="submit" name="submit" value="Posalji">


	</form>


	</body>
</html>

<?php

}

?>	