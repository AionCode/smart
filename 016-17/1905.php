<?php
  if(empty($_POST['boja'])){
    $b = "#FF0";
  }else{
    $b = $_POST['boja'];
  }
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
  
  <h1 style="color:<?php echo $b; ?>;" >Novi Sad</h1>
  
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

    <label>Boja:</label>
    <input type="color" name="boja" value="<?php echo $b; ?>" /><br>
    <br>
    <input type="submit" name="submit" value="Primeni" />
    
  </form>
  
	</body>
</html>

