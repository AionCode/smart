<html>

	<head>
		<title>Formular</title>	
	</head>
	
	<body>

	<form action="obrada.php" method="post" >
	<label>Ime i prezime:</label>
	<input type="text" name="ime"><br>

	<label>E-mail:</label>
	<input type="mail" name="mail"><br>

	<label>Broj:</label>
	<input type="number" name="broj" min="1" max="5" ><br>	

	<label>Datum:</label>
	<input type="date" name="datum"><br>


	<input type="buttom" value="klikni na mene" onclick="msg()" ><br>

	<label>Prevoz:</label> <br>
	<input type="checkbox" name="v1" value="auto"> Auto <br>	
	<input type="checkbox" name="v2" value="bus"> Bus <br>	

	<label>Boja:</label>
	<input type="color" name="boja"><br>	

	<label>Dokument:</label>
	<input type="file" name="dokument"><br>

	<input type="hidden" name="kljuc" value="5" ><br>

	<label>Lozinka:</label>
	<input type="password" name="lozinka"><br>

	<label>Pol:</label>
	<input type="radio" name="pol" value="m">Musko<br> 
	<input type="radio" name="pol" value="z">Zensko<br>

	<label>Boja:</label>
	<input type="radio" name="boja2" value="c">Crvena<br> 
	<input type="radio" name="boja2" value="z">Zelena<br>
	<input type="radio" name="boja2" value="p">Plava<br>

	<label>Grad:</label>
	<select name="lista" >
		<option value="1" >Novi Sad</option>
		<option value="1" >Beograd</option>
		<option value="1" >Sabac</option>
		<option value="1" >Subotica</option>
	</select>

	<hr>

	<label>Poruka:</label><br>
	<textarea name="poruka" rows="8" cols="25" placeholder="Unesite zeljeni tekst..."></textarea>

	<hr>

	<input type="submit" value="Posalji">

	<input type="reset" value="Resetuj">




	</form>

		<?php


		?>	


	</body>
</html>