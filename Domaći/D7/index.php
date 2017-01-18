<!DOCTYPE html>
<html lang="sr">
	<head>
		<meta charset="utf-8"/>
		<title>Domaci 7</title>
		<link href="css/style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="wrapper" >
			<header>
				<h1>DOMACI 7</h1>
			</header>
			<nav>
				
					<ul>
						<li><a href="#Z1">Zadatak 1</a></li>
						<li><a href="#Z2">Zadatak 2</a></li>
						<li><a href="#Z3">Zadatak 3</a></li>
						<li><a href="#Z4">Domaci 6 Zadatak 1 - Popravni</a></li>
					</ul>
				
			</nav>
			<main>
				<content>
					<article>
						<h2 id="Z1">Zadatak 1</h2>
						<p>Za dati niz pronaći najmanju razliku između aritmetičke sredine niza i elementa niza, i po mogućstvu na kojoj poziciji se nalazi.</p>
						<p>Resenje: </p><br/>
							<?php
								$niz = array(13, -4, 0, 98, -79, 69, -9, 64, 18, -59, 34, -99, 55, 89, 50, 21);
								$n = count($niz); // brojac elementa u nizu
								$i = 0;	// brojac
								$z = 0; // zbir
								$as = 0; //aritmeticka sredina
								$nr = array(); // niz razlika
								$small = 100; // pomocna za pronalazenje najmanje razlike
								$j = 0; // pomocna za cuvanje pozicije najmanjeg elementa
								
								//Trazenje aritmeticke sredine
								while($as<=$n){
									$i = $i + 1;
									$z = $z + $i;
									$as = $z / $i;
								}
								echo "<p class='resenje'>Aritmeticka sredina niza je " . $as . "</p><br/>";
								
								//Pravljenje pomocnog niza sa vrednostima razlike aritmeticke sredine i elementa i trazenje najmanje razlike
								for ($i=0; $i<$n; $i++){
									$nr[$i] = abs($as-$niz[$i]);
									if($small>$nr[$i]){
										$small = $nr[$i];
										$j = $i;
									}
								}
								echo "<p class='resenje'>Najmanja razlika izmedju aritmeticke sredine i elementa niza je " . $small . ", a sam element se nalazi na poziciji " . $j . " u nizu</p>";
								
							?>
					</article>
					<article>
						<h2 id="Z2">Zadatak2</h2>
						<p>Kreirati multidimenzijonalni niz sa 3 elementa niza sa po 4-5 pod elementa niza.</p><br/>
						<?php 
							$mdb = array (
								array(
									"id" => 1,
									"title" => "The Lord of the Rings: The Fellowship of the Ring",
									"genre" => "Adventure, Drama, Fantasy",
									"duration" => "2h 58min",
									"rating" => "PG-13",
									"year" => 2001,
									"score" => 8.8,
									"actors" =>	array(
										"actor1" => "Sean Bean",
										"actor2" => "Orlando Bloom",
										"actor3" => "Cate Blanchett",
									)
								),
								array(
									"id" => 2,
									"title" => "The Dark Knight",
									"genre" => "Action, Crime, Drama",
									"duration" => "2h 32min",
									"rating" => "PG-13",
									"year" => 2008,
									"score" => 9,
									"actors" =>	array(
										"actor1" => "Christian Bale",
										"actor2" => "Heath Ledger",
										"actor3" => "Michael Caine",
									)
								),
								array(
									"id" => 3,
									"title" => "Star Wars: Episode V - The Empire Strikes Back",
									"genre" => "Action, Adventure, Fantasy",
									"duration" => "2h 4min",
									"rating" => "PG",
									"year" => 1980,
									"score" => 8.8,
									"actors" =>	array(
										"actor1" => "Mark Hamill",
										"actor2" => "Harrison Ford",
										"actor3" => "Carrie Fisher",
									),
								)
						);
						var_dump($mdb);
						?>
					</article>
					<article>
						<h2 id="Z2">Zadatak 3</h2>
						<p>Niz iz Z2 neka izlista samo po jednu zadatu vrednost.</p><br/>
						<?php 
              echo "<p>Filmovi:</p><br/>";
              for ($i=0; $i<3; $i++){
                echo $mdb[$i]["title"] . "<br/>";
              }
              echo "<hr/><br/>";
     
              
            
              //eksperimentisanje
              
              for ($i=0; $i<3; $i++){
                foreach ($mdb[$i]["actors"] as $kljuc => $vrednost){
                  if ($vrednost == "Mark Hamill "){
                    echo $vrednost;
                  }
                }
                echo "<br/>";
              }
            
						?>
					</article>
					<article>
						<h2 id="Z4">Domaci 6 Zadatak 1 - Popravni</h2>
						<p>Za unetu vrednost a, b i c prikazati ih u rastućem redosledu.</p>
						<br/>
						<p>Resenje: </p>
						<?php
							$a = 9;
							$b = 24;
							$c = 13;
							
							if($a >= $b){
								if($a >= $c){
									if($b >= $c){
										echo "$c < $b < $a";
									} else {
											echo "$b < $c < $a";
									}
								} else {
										echo "$b < $a < $c";
								}
							} elseif ($b >= $c) {
									if ($a >= $c){
										echo "$c < $a < $b";
									} else {
											echo "$a < $c < $b";
									}
							} else {
									echo "$a < $b < $c";
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