<html>

	<head>
		<title>Asocijativni Niz</title>	
	</head>
	
	<body>

		<?php 
		
		$niz = array ("pavle", "milan", "jelena");
		
		$n[0] = "pavle";
		$n[1] = "milan";
		$n[2] = "jelena";

		$n = array(0 => "pavle", 1 => "milan", 2 => "jelena");
		$n = array("nula" => "pavle", "prvi" => "milan", "drugi" => "jelena");
		
		$n = array (
			"nula" => "pavle",
			"prvi" => "milan",
			"drugi" => "jelena"
			);
		
		echo $n["drugi"]."<br>";
		
		print $n["prvi"]. "<br>";
		
		echo "<hr>";
		
		foreach ($n as $kljuc => $vrednost){
			echo $kljuc . "=> " . $vrednost. "<br>";
		}
		
		
		?>
		
	</body>
</html>