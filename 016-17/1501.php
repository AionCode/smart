<html>
	<head>
		<title>Break - Continue</title>
	</head>
	<body>
  <?php
  $n = array(3,-9,4,0,15,56,-986,235,6);
  
  
  for ($i=0;$i<count($n);$i++){
    if ($n[$i]==0){
      $p = $i;
      break;
    }
  }
  
  echo $p;

  ?>
	</body>
</html>