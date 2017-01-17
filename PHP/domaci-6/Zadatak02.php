<html>

	<head>
		<title>Zadatak 2</title>

	</head>
	
	<body>

		<?php 
		//  Student moze da izadje na ispit ako je :
		//a. Ako bar na jednom od dva kolokvijuma ima vise od 50 bodova.
		echo "a.) ";

		$k1 = 30;
		$k2 = 60;

		if ($k1 >= 50){
			echo "Student moze da izadje na ispit.";
		} elseif ($k2 >= 50){
			echo "Student moze da izadje na ispit.";
		} else {
			echo "Student ne moze da izadje na ipit.";
		}
		
		echo "<hr>";

		//b. Ako na oba kolokvijuma ima vise od 50 bodova.
		echo "b.) ";

		$k1 = 49;
		$k2 = 50;

		if ($k1 >= 50 and $k2 >= 50){
			echo "Student moze da izadje na ispit.";
		} else {
			echo "Student ne moze da izadje na ipit.";
		}
		
		echo "<hr>";
			

		?>
		
	</body>
</html>