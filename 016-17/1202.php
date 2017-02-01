<html>
	<head>
		<title>NIZ</title>
	</head>
	<body>
  <?php
  //Prebrojati koliko ima pozitivnih elenata
  $niz = array(13,-4,0,98,-79,67,-9,64,18,-59,34);
  
  $n = count($niz);
  $i = 0;
  $b = 0;
  while ($i<$n){
    if ($niz[$i]>0){
      $b = $b + 1; // $b++
    }
    $i++;
  }
  
  echo "Ima " . $b;
  
  ?>
	</body>
</html>