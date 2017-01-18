<html>
	<head>
		<title>Domaci 5</title>
	</head>
	<body>
		<h1>DOMACI 5</h1>

		<?php
		echo "<h2>Zadatak 1</h2>
					<p>Izracunati obim i povrsinu kruga.</p><br/>
					<p>Resenje: </p>";
		
		$r = 5; // poluprecnik kruga

		$pk = $r ** 2 * M_PI;
		$ok =  2 * $r * M_PI;

		echo "<p>Povrsina kruga poluprecnika <b>r = $r</b> prema formuli <i>P = r^2 * pi</i> iznosi <b>$pk</b>.</p>";
		echo "<p>Obim kruga poluprecnika <b>r = $r</b> prema formuli <i>P = 2 * r * pi</i> iznosi <b>$ok</b>.</p><hr/>";

		?>

		<?php
			echo "<h2>Zadatak 2</h2>
						<p>Izracunati obim i povrsinu trougla.</p><br/>
						<p>Resenje: </p>";
						
			$a = 5;
			$b = 7;
			$c = 9;
							
			$pt = $a * $b / 2;
			$ot = $a + $b + $c;
						
			echo "<p>Povrsina pravougaonog trougla duzina stranica <b>a = $a</b>, <b>b = $b</b>, <b>c = $c</b> prema formuli <i>P = a * b / 2</i> iznosi <b>$pt</b>.</p>";
			echo "<p>Obim pravougaonog trougla duzina stranica <b>a = $a</b>, <b>b = $b</b>, <b>c = $c</b> prema formuli <i>O = a + b + c</i> iznosi <b>$ot</b>.</p><hr/>";
							
			?>

			<?php
				echo "<h2>Zadatak 3</h2>
						<p>Napisati program koji prevodi tezinu u funte(400g=1ft).</p><br/>
						<p>Resenje: </p>";
					
				define("FT", 0.4); // funta u kg
				$t = 50;
				
				$m = $t/FT;

				echo "<p><b>$t</b>kg iznosi <b>$m</b>lb.</p><hr/>";

				?>

				<?php
					echo "<h2>Zadatak 4</h2>
						<p>Napisati program koji proverava da li je prirodni broj paran.</p><br/>
						<p>Resenje: </p>";
		
						$broj = 11;
						
            $r = $broj % 2;
						
						if($r==0){
							echo "<p>Prirodni broj $broj je paran.</p><hr/>";
						} else {
							echo "<p>Prirodni broj $broj je neparan.<p><hr/>";
						}
				
				?>

				<?php
					echo "<h2>Zadatak 5</h2>
						<p>Napisati program koji izracunava iznos poreza na bruto platu. Ako je plata veca od 1000e porez je 20%, inace je 15%.</p><br/>
						<p>Resenje: </p>";
						
					$plata = 900;
						
					if($plata > 1000){
						$porez = $plata * 20 / 100;
						echo "<p>Za platu od <b>$plata</b> evra treba da se plati porez u iznosu od <b>$porez</b>evra.</p><hr/>";
					} else {
						$porez = $plata * 15 / 100;
						echo "<p>Za platu od <b>$plata</b> evra treba da se plati porez u iznosu od <b>$porez</b> evra.</p><hr/>";
					}
	
				?>
	</body>
</html>