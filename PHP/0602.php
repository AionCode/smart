<html>

	<head>
		<title>Art. oper.</title>	
	</head>
	
	<body>
	
		<?php 
		// Izracunari EVRO
		$din = 2400;	
		define ("EVRO", 120);
		
		$e = $din / EVRO;	
		echo "EVRO" . $e . "<br>";
		
		echo"<hr>";
		
		//Izracunari cm u ince (2.54)
		
		$cm = 2;
		define ("INCH", 2.54 );
		
		$in = $cm / INCH;
		echo "Vrednost je " . $in;
		
		
		
		?>	
		
	</body>
</html>