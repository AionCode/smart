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
  echo "<hr>";
  
  ?>
  
  <table border=1>
    <tr>
      <th>Ime</th>
      <th>Prezime</th>
      <th>Pol</th>
      <th>Starost</th>
    </tr>
  <?php
  foreach ($tim as $niz){
    echo "<tr>";
    foreach ($niz as $v){
      echo "<td>" . $v . "</td>";
    }
    echo "</tr>";
  }  
  
  ?>
  </table>
  
	</body>
</html>