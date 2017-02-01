<html>
	<head>
		<title>Osnovne aritmetičke operacije</title>
	</head>
	<body>
  <?php
    //operator dodele
    $a = 5;
    $b = 15;
    
    //operator za znakovni niz (.)
    echo "a = " . $a . "<br>";
    echo "b = " . $b . "<br>";
    
    // sabiranje
    $c = $a + $b;
    echo "Zbir je " . $c . "<br>";
    
    // oduzimanje
    $d = $a - $b;
    echo "Razlika je " . $d . "<br>";
    
    // mnozenje
    $e = $a * $b;
    echo "Proizvod je " . $e . "<br>";
    
    // kolicnik
    $f = $a / $b;
    echo "Kolicnik je " . $f . "<br>";
    
    // ostatak
    $g = $a % $b;
    echo "Ostatak je " . $g . "<br>";
    
    // dodaj jedan
    $a = $a + 1;
    echo "Rezultat " . $a . "<br>";
    
    // dodaj jedan
    $a++;
    echo "Rezultat " . $a . "<br>";
    
    //navodnici
    echo "$a + $b = $c <br>";
    echo '$a + $b = $c <br>';
    
  ?>
	</body>
</html>