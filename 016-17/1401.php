<html>
	<head>
		<title>Funkcije - kreiranje</title>
	</head>
	<body>
  <?php
  function pozdrav(){
    echo "<h1>dobar dan!</h1>";
  }
  
  pozdrav();
  echo "<hr>";
  
  //---------------------------
  function poz2($i,$p){
    echo "<h2>dobar dan " . $p . " " . $i ."!</h2>";
  }
  
  poz2("pavle","pejak");
  echo "<hr>";
  
  //---------------------------
  $prez = "pejak";
  function poz3($p){
    echo "<h3>dobar dan " . $p . "!</h3>";
  }
  poz3($prez);
  echo "<hr>";
  
  //---------------------------
  $prez = "pejak";
  $ime = "pavle";
  
  function poz4($p){
    global $ime;
    echo "<h2>dobar dan " . $p . " " . $ime ."!</h2>";
  }
  
  poz4($prez);
  echo "<hr>";
  
  
  
  ?>
	</body>
</html>