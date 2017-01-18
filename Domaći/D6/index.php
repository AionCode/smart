<!DOCTYPE html>
<html lang="sr">
	<head>
		<meta charset="utf-8"/>
		<title>Domaci 6</title>
		<link href="css/style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="wrapper" >
			<header>
				<h1>DOMACI 6</h1>
			</header>
			<nav>
				<table>
					<tr>
						<td><a href="#Z1">Zadatak 1</a></td>
						<td><a href="#Z2">Zadatak 2</a></td>
						<td><a href="#Z3">Zadatak 3</a></td>
						<td><a href="#Z4">Zadatak 4</a></td>
						<td><a href="#Z5">Zadatak 5</a></td>
					</tr>
				</table>
			</nav>
			<main>
				<content>
					<article>
						<h2 id="Z1">Zadatak 1</h2>
						<p>Za unetu vrednost a, b i c prikazati ih u rastućem redosledu.</p>
						<br/>
						<p>Resenje: </p>
						<?php
							$a = 9;
							$b = 4;
							$c = 3	;
							$min = $a;
							$max = $a;
							$pom = $a;	// pomocna 1
							$pom2 = $a;	// pomocna 2
						
							if($max >= $b){
								$min = $b;
							}	else {
									$min = $max;
									$max = $b;
							}
							if ($max >= $c ){
									$pom = $c;
							} else {
								$pom = $max;
								$max = $c;
							}
							if ($pom >= $min){
								 echo "<p class='resenje'>" . $min . ", " . $pom . ", " . $max . "</p>";
							} else {
									$pom2 = $min;
									$min = $pom;
									 echo "<p class='resenje'>" . $min . ", " . $pom2 . ", " . $max . "</p>";
							}
						?>
					</article>
					<article>
						<h2 id="Z2">Zadatak 2</h2>
						<p>Student moze izaci na ispit ako:</p>
							<ol>
								<li>Na bar 1 kolokvijum ima vise od 50 bodova.</li>
								<li>Na oba kolokvijuma ima vise od 50 bodova. </li>
							</ol><br/>
							<p>Resenje: </p><br/>
							<?php
								$k1 = 54;
								$k2 = 54;
								$mb = 50; // pomocna minimalan broj bodova
								
								echo "<p>a)</p><br/>";
								if($k1>=$mb || $k2 >=$mb){
									echo "<p class='resenje'>Student je na kolokvijumu 1 osvojio $k1 bod(ov)a, a na kolokvijumu 2 $k2 bod(ov)a, stoga ima prava da izadje na ispit.</p><br/>";
								} else {
										echo "<p class='resenje'>Student ne zadovolja minimum za izlazak na ispit jer je na oba kolokvijuma osvojio manje bodova od minimuma (k1 = $k1 i k2 = $k2.)</p><br/>";
								}
								echo "<p>b)</p><br/>";
								if($k1>=$mb && $k2 >=$mb){
									echo "<p class='resenje'>Student ima prava da izadje na ispit jer je na oba kolokvijuma osvojio vise bodova od minimuma (k1 = $k1 i k2 = $k2.).</p><br/>";
								} else {
										echo "<p class='resenje'>Student ne zadovolja minimum za izlazak na ispit. (k1 = $k1 i k2 = $k2.)</p><br/>";
								}
								
							?>
					</article>
					<article>
						<h2 id="Z3">Zadatak 3</h2>
						<p>Koristiti switch/case ispisati ime i prezime u boji. (minimum 4 boje)</p><br/>
						<?php 
							$ime = "Milan Stanković";
							$boja = "Orange";
							
							echo "<p>Resenje</p>";
							switch ($boja) {
								case "green":
                case "Green":
										echo "<p class='green resenje'><b>" . $ime . "</b></p>";
								break;
								case "Red":
								case "red":
									echo "<p class='red resenje'>" . $ime . "</p>";
								break;
								case "Orange":
								case "orange":
									echo "<p class='orange resenje'><b>" . $ime . "</b></p>";
								break;
								case "Yallow":
								case "yallow":
									echo "<p class='yallow resenja'>" . $ime . "</p>";
								break;
								default:
									echo "<p class='default resenje'>Ne postoji izabrana boja</p>";
									echo "<p class='default resenje'>" . $ime . "</p>";
							}
						?>
					</article>
					<article>
						<h2 id="Z4">Zadatak 4</h2>
						<p>Napisati program za rešavanje kvadratne jedačine.</p><br/>
						<?php 
							$a = 1;
							$b = 6;
							$c = 1;
							$x1 = 0;
							$x2 = 0;
							 
							 $d = $b*$b - 4*$a*$c;
							 echo "<p>". $a ."x&sup2 + " . $b . "x + $c = 0</p><br/>";
							 echo "<p>Resenje:</p><br/>";
							 
							 if($d<=0){
								 echo "<p class='resenje'>Kvadratna jednacina nema realna resenja!</p>";
							 }
							 elseif($a == 0){
								 $x1 = -$b/$c;
								 echo "<p>Jednačina se rešava po formuli: <b>x= -b/c </b></p>";
								 echo "<p class='resenje'>Jednacina ima samo jedno resenje: x = $x1</p>";
							 }
							 elseif ($d == 0){
								 $x1 = -$b/(2*$a);
								 echo "<p>Jednačina se rešava po formuli: <b>x= -b/(2a) </b></p>";
								 echo "<p class='resenje'>Jednacina ima samo jedno resenje: x = $x1</p>";
							 } 
							 else {
								$x1 = (-$b + sqrt($b** - 4*$a*$c))/(2*$a);
								$x2 = (-$b - sqrt($b** - 4*$a*$c))/(2*$a);
								echo "<p>Jednačina se rešava po formulama: <b>x<sub>1</sub>= -b +  &#8730(b&sup2-4ac)/(2a) i x<sub>2</sub>= -b -  &#8730(b&sup2-4ac)/(2a) </b></p>";	
								echo "<p class='resenje'>Kvadratna jednacina ima resenja: x<sub>1</sub> = $x1 i x<sub>2</sub> = $x2</p>";								
							}
						?>
					</article>
					<article style="min-height: 800px;">
						<h2 id="Z5">Zadatak 5</h2>
						<p>Tablica deljenja u for petlji sa 4 razlicite boje pozadine.</p><br/>
												
						<?php 
							echo "<p>Resenje:</p><br/>";
							
								for ($i=1; $i<=10; $i++){
									echo "<div class='td ";
										switch ($i){
											case 1:
											case 5:
											case 9:
												echo "t1";
											break;
											case 2:
											case 6:
											case 10:
												echo "t2";
											break;
											case 3:
											case 7:
												echo "t3";
											break;
											default:
												echo "t4";
										}
									echo "'>";
									for ($j=1; $j<=10; $j++) {
									$k = $i * $j;
									echo $k . " / " . $i . " = " . $j . "<br/>";
									}
								echo "</div>";
						}
    				?>
					</article>
				</content>
				<footer> 
					<p>&copy; 2017 Domaci 6 | dizajn: Milan Stanković</p>
				</footer>
			</main>	
		</div>	
	</body>
</html>