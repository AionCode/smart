<?php
  if(empty($_POST['nivo'])){
    $nivo = 6;
  } else {
    $nivo = $_POST['nivo'];
  }
  
  if(empty($_POST['bn'])){
    $bn = "#000000";
  } else {
    $bn = $_POST['bn'];
  }
  
  if(empty($_POST['bp'])){
    $bp = "#000000";
  } else {
    $bp = $_POST['bp'];
  }
  
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
 
    <h<?php echo $nivo; ?> style="color:<?php echo $bn; ?>">Novi Sad</h<?php echo $nivo; ?>>
    
    <p style="color:<?php echo $bp; ?>" >Moj grad je najlepši</p>
    
    <hr>
    
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <p>Nivo naslova</p>
      <input type="radio" name="nivo" value="1">N1<br> 
      <input type="radio" name="nivo" value="2">N2<br> 
      <input type="radio" name="nivo" value="3">N3<br> 
      
      Boja naslova:
      <input type="color" name="bn" value="#000000" >
      <hr>
      
      Boja pasusa:
      <select name="bp">
        <option value="ff0000" >Crvena</option>
        <option value="00ff00" >Zelena</option>
        <option value="0000ff" >Plava</option>
      </select>
      
      <br>
      <input type="submit" name="submit" value="Primeni" />
      
    </form>
  
	</body>
</html>

