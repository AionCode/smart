<?php

	if (empty($_GET["tip"])) {
		$tip = 1;
		} else {
			$tip = $_GET["tip"];
 		}

?>

<html>

	<head>
		<title>Zadatak03</title>

	</head>
	
	<body>


		 <ol>
	  <li type="<?php echo $tip; ?>">Jagode</li>
	  <li type="<?php echo $tip; ?>">Mleko</li>
	  <li type="<?php echo $tip; ?>">Secer</li>
	  <li type="<?php echo $tip; ?>">Kruske</li>
	  <li type="<?php echo $tip; ?>">Kafa</li>
	  <li type="<?php echo $tip; ?>">Banane</li>
	  <li type="<?php echo $tip; ?>">Hleb</li>
		</ol> 

	<hr>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get" >

		<p> Tip atributa taga: </p>

   		<a href="<?php $_SERVER["PHP_SELF"]; ?>?tip=1" >1</a><br>
    	<a href="<?php $_SERVER["PHP_SELF"]; ?>?tip=A" >A</a><br>
    	<a href="<?php $_SERVER["PHP_SELF"]; ?>?tip=a" >a</a><br>
    	<a href="<?php $_SERVER["PHP_SELF"]; ?>?tip=I" >I</a><br>


		<hr>


	</form>


	</body>
</html>

