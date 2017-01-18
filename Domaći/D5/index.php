<!DOCTYPE html>
<html lang="sr">
	<head>
		<meta charset="utf-8"/>
		<title>Domaci 5</title>
		<link href="css/style.css" type="text/css" rel="stylesheet" />	
	</head>
	<body>
		<div id="wrapper" >
			<header>
				<h1>DOMACI 5</h1>
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
						<p>Izracunati obim i povrsinu kruga.</p>
						<br/>
						<p>Resenje: </p>
						<img src="img/circle.gif" />
						<br/>
						
						<?php
							$r = 5; // poluprecnik kruga
							
							$pk = $r ** 2 * M_PI;
							$ok =  2 * $r * M_PI;
							
							echo "<p>Povrsina kruga poluprecnika <b>r = $r</b> prema formuli <i>P = r^2 * pi</i> iznosi <b>$pk</b>.</p>";
							echo "<p>Obim kruga poluprecnika <b>r = $r</b> prema formuli <i>P = 2 * r * pi</i> iznosi <b>$ok</b>.</p>";
							
						?>
					</article>
					<article>
						<h2 id="Z2">Zadatak 2</h2>
						<p>Izracunati obim i povrsinu trougla.</p>
						<br/>
						<p>Resenje: </p>
						<img src="img/tryangle.png" />
						<br/>
						<?php
							$a = 5;
							$b = 7;
							$c = 9;
							
							$pt = $a * $b / 2;
							$ot = $a + $b + $c;
							
							echo "<p>Povrsina pravougaonog trougla duzina stranica <b>a = $a</b>, <b>b = $b</b>, <b>c = $c</b> prema formuli <i>P = a * b / 2</i> iznosi <b>$pt</b>.</p>";
							echo "<p>Obim pravougaonog trougla duzina stranica <b>a = $a</b>, <b>b = $b</b>, <b>c = $c</b> prema formuli <i>O = a + b + c</i> iznosi <b>$ot</b>.</p>";
							
						?>
					</article>
					<article>
						<h2 id="Z3">Zadatak 3</h2>
						<p>Napisati program koji prevodi tezinu u funte(400g=1ft).</p>
						<br/>
						<p>Resenje: </p>
							<img src="img/3.jpg" />
						<br/>
						<?php
							define("FT", 0.4); // funta u kg
							$t = 50;
							
							$m = $t/FT;
							
							echo "<p><b>$t</b>kg iznosi <b>$m</b>lb.</p>";
				
						?>
					</article>
					<article>
						<h2 id="Z4">Zadatak 4</h2>
						<p>Napisati program koji proverava da li je prirodni broj paran.</p>
						<br/>
						<p>Resenje: </p>
						<?php
							$broj = 11;
							
							$r = $broj % 2;
							
							if($r==0){
								echo "<img src='img/plus.png' />";
								echo "<p>Prirodni broj $broj je paran.</p>";
							} else {
								echo "<img src='img/minus.png' />";
								echo "<p>Prirodni broj $broj je neparan.<p>";
							}
				
						?>
					</article>
					<article>
						<h2 id="Z5">Zadatak 5</h2>
						<p>Napisati program koji izracunava iznos poreza na bruto platu. Ako je plata veca od 1000e porez je 20%, inace je 15%.</p>
						<br/>
						<p>Resenje: </p>
						<img src="img/money.gif" />
						<?php
							$plata = 900;
							
							if($plata > 1000){
								$porez = $plata * 20 / 100;
								echo "<p>Za platu od <b>$plata</b> evra treba da se plati porez u iznosu od <b>$porez</b>evra.</p>";
							} else {
								$porez = $plata * 15 / 100;
									echo "<p>Za platu od <b>$plata</b> evra treba da se plati porez u iznosu od <b>$porez</b> evra.</p>";
							}
	
						?>
					</article>
				</content>
				<footer> 
					<p>&copy; 2017 Domaci 5 | dizajn: Milan Stanković</p>
				</footer>
			</main>	
		</div>	
	</body>
</html>