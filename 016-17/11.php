<html>
	<head>
		<title>While petlja</title>
	</head>
	<body>
  <?php 
  
  $b = 5;
  while ($b < 5){
    $b = $b + 1;
    echo $b . "<br>";
  }
  echo "<hr>";
  
  $b = 5;
  do {
    $b = $b + 1;
    echo $b . "<br>";
  } while ($b < 5);
  
  ?>
	</body>
</html>