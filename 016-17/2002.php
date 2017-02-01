<?php
if(empty($_GET['boja'])){
  $b = "000000";
} else {
  $b = $_GET['boja'];
}

if(empty($_GET['boja2'])){
  $b2 = "000000";
} else {
  $b2 = $_GET['boja2'];
}
?>
<html>
	<head>
		<title>Linkovi - GET</title>
	</head>
	<body>
    
    <h1 style="color:#<?php echo $b; ?>" >Novi Sad</h1>
    
    <a href="<?php $_SERVER["PHP_SELF"]; ?>?boja=ff0000&boja2=<?php echo $b2; ?>" >Crvena</a><br>
    
    <a href="<?php $_SERVER["PHP_SELF"]; ?>?boja=00ff00&boja2=<?php echo $b2; ?>" >Zelena</a><br>
    
    <a href="<?php $_SERVER["PHP_SELF"]; ?>?boja=0000ff&boja2=<?php echo $b2; ?>" >Plava</a><br>
    
    
    <p style="color:#<?php echo $b2; ?>" >Najlepši grad</p>
    
    <a href="<?php $_SERVER["PHP_SELF"]; ?>?boja=<?php echo $b; ?>&boja2=ff0000" >Crvena</a><br>
    
    <a href="<?php $_SERVER["PHP_SELF"]; ?>?boja=<?php echo $b; ?>&boja2=00ff00" >Zelena</a><br>
    
    <a href="<?php $_SERVER["PHP_SELF"]; ?>?boja=<?php echo $b; ?>&boja2=0000ff" >Plava</a><br>
    
    
    
    
	</body>
</html>