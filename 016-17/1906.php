<?php
  $niz = array(
    "ff0000" => "Crvena",
    "00ff00" => "Zelena",
    "0000ff" => "Plava",
    "ffff00" => "Žuta",
  );

  if(empty($_POST['bg'])){
    $bg = "#FF0";
  }else{
    $bg = $_POST['bg'];
  }
?>
<html>
	<head>
		<title></title>
	</head>
	<body bgcolor="<?php echo $bg; ?>" >

  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

    <label>Boja:</label>
    <select name="bg">
      <?php
      foreach($niz as $k => $v){
        echo "<option value='" . $k . "' >" . $v . "</option>";
      }
      ?>
    </select>
    <br>
    <input type="submit" name="submit" value="Primeni" />
    
  </form>
  
	</body>
</html>

