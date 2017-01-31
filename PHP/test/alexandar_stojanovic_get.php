<?php

  if(empty($_GET['boja'])){
    $b = "000000";
  } else {
    $b = $_GET['boja'];
  }

  if (empty($_GET["bg"])) {
      $bg = "#FFF";
    }else{
      $bg = $_GET["bg"];
    }

?>
<html>
	<head>
		<title>Linkovi - GET</title>
	</head>
	<body bgcolor="<?php echo $bg; ?>" >

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get" > 
    
    <a href="<?php $_SERVER["PHP_SELF"]; ?>?bg=ff0000&boja=<?php echo $b; ?>" >Crvena</a><br>
    
    <a href="<?php $_SERVER["PHP_SELF"]; ?>?bg=00ff00&boja=<?php echo $b; ?>" >Zelena</a><br>
    
    <a href="<?php $_SERVER["PHP_SELF"]; ?>?bg=0000ff&boja=<?php echo $b; ?>" >Plava</a><br>
    
    
    <p style="color:#<?php echo $b; ?>" >NOVI SAD</p>

    
    <a href="<?php $_SERVER["PHP_SELF"]; ?>?boja=ff0000&bg<?php echo $bg; ?>" >Crvena</a><br>
    
    <a href="<?php $_SERVER["PHP_SELF"]; ?>?boja=00ff00&bg<?php echo $bg; ?>" >Zelena</a><br>
    
    <a href="<?php $_SERVER["PHP_SELF"]; ?>?boja=0000ff&bg<?php echo $bg; ?>" >Plava</a><br>
    
    
    
    </form>
	</body>
</html>