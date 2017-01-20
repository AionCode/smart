<html>

	<head>
		<title>IF Struktura - granjane</title>	
	</head>
	
	<body>

	<?php

	$n = array ('PNL' => "DA" , "JUl" => "En toure en ronde" );

	foreach ($n as $v) {
		echo $v . " - " ;
	}

	echo "<hr>";

	foreach ($n as $k => $v) {
		echo $k . " => " . $v . "<br>" ;
	}


	?>

		
	</body>
</html>