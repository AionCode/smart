<html>
	<head>
		<title>Break - Continue</title>
	</head>
	<body>
  <?php
  for ($i=0;$i<=10;$i++){
    if ($i==5){
      break;
    }
    echo $i."<br>";
  }
  echo "<hr>";
  
  for ($i=0;$i<=10;$i++){
    if ($i==6){
      continue;
    }
    echo $i."<br>";
  }
  echo "<hr>";
  
  
  ?>
	</body>
</html>