<html>
	<head>
		<title>Cookie</title>
	</head>
	<body>
  <?php
  //postavi cookie
  setcookie("skola","smart",(time()+60));
  
  //ispisuje
  echo $_COOKIE['skola'];
  
  ?>
  
  
	</body>
</html>