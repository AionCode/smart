<html>
	<head>
		<title>If - zadatak</title>
	</head>
	<body>
  
  <?php
  //Za vrednosti A, B i C prikazati najveću
  $a = 13;
  $b = 13;
  $c = 4;
  
  if ($a > $b){
    if ($a > $c){
      echo $a;
    } else{
      echo $c;
    }
  } else {
    if ($b > $c){
      echo $b;
    } else {
      echo $c;
    }
  }
  echo "<hr>";
  // drugi način
  $a = 2;
  $b = 3;
  $c = 4;
  
  $max = $a;
  if ($b > $max) {
    $max = $b;
  }
  if ($c > $max) {
    $max = $c;
  }
  echo "Najveće je " . $max;
  
  ?>
  
	</body>
</html>