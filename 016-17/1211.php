<html>
	<head>
		<title>Multidimenzionalni NIZ</title>
	</head>
	<body>
  <?php

  $tim = array (
    array (
      "ime" => "pavle",
      "prezime" => "pejak",
      "pol" => "M",
      "starost" => 50,
    ),
    
    array (
      "ime" => "jelena",
      "prezime" => "nikolic",
      "pol" => "Z",
      "starost" => 23,
    ),
    
    array (
      "ime" => "bojan",
      "prezime" => "Milenkovic",
      "pol" => "M",
      "starost" => 35,
    ),
  );
  
  foreach ($tim as $niz){
    foreach ($niz as $k => $v){
      echo $k . " => " . $v . "<br>";
    }
    echo "<br>";
  }
  
  
  ?>
	</body>
</html>