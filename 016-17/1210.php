<html>
	<head>
		<title>Asocijativni NIZ</title>
	</head>
	<body>
  <?php
  $n = array("pavle","milan","jelena");
  
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
  
  print $n["prvi"]."<br>";
  
  echo "<hr>";
  
  foreach ($n as $vrednost){
    echo $vrednost."<br>";
  }
  
  echo "<hr>";
  
  foreach ($n as $kljuc => $vrednost){
    echo $kljuc . " => " . $vrednost."<br>";
  }
  
  
  
  ?>
  
	</body>
</html>