<html>
	<head>
		<title>NIZ</title>
	</head>
	<body>
  <?php
  //Izracunati prosecnu vrednost niza
  $niz = array(13,-4,0,98,-79,67,-9,64,18,-59,34);
  
  $n = count($niz);
  $s = 0;
  for ($i=0;$i<$n;$i++){
    $s = $s + $niz[$i];
  }
  
  echo "Prosek je " . $s/$n;
  
  ?>
	</body>
</html>