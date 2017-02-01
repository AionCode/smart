<html>
	<head>
		<title>Session</title>
	</head>
	<body>
  <?php
  
  session_start();
  
  $_SESSION['skola'] = "Smart";
  $_SESSION['grad'] = "Novi Sad";
  
  echo "Vrednost 'skola' koja se drzi u sesiji: " . $_SESSION['skola']; 
  echo "<br>";
  echo "Vrednost 'grad' koja se drzi u sesiji: " . $_SESSION['grad']; 
  echo "<br>";
  
  
  ?>
  <a href="1801.php" >Session</a><br>
  <a href="1802.php" >skola</a><br>
  <a href="1803.php" >Grad</a><br>
  
  
	</body>
</html>