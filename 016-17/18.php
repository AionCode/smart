<html>
	<head>
		<title>Serverska promenljive</title>
	</head>
	<body>
  <?php
  echo $_SERVER['PHP_SELF'];
  echo "<br>";
  
  echo $_SERVER['HTTP_USER_AGENT'];
  echo "<br>";
  
  echo basename($_SERVER['PHP_SELF']);
  echo "<br>";
  
  echo dirname($_SERVER['PHP_SELF']);
  echo "<hr>";
  
  foreach($_SERVER as $k => $v){
    echo $k . " => " . $v . "<br>";
  }
  
  ?>
	</body>
</html>