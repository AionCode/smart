<?php
  $nfont = array("Arial", "Verdana", "Tahoma", "Time New Roman");
  $nsize = array(12,14,16, 20, 30, 50);
  
  if(empty($_GET['font'])){
    $font="Arial";
  } else {
    $font = $_GET['font'];
  }
  
  if(empty($_GET['size'])){
    $size="12";
  } else {
    $size = $_GET['size'];
  }
  
?>
<html>
	<head>
		<title>Linkovi - GET</title>
    <style>
      .pasus {
        font-family:<?php echo $font; ?>;
        font-size:<?php echo $size; ?>;
      }
    </style>
    
	</head>
	<body>

    <p class="pasus">Najlepsi grad</p>
    
    <p>Font: 
    <?php
      foreach($nfont as $vf){
        echo "<a href='2004.php?font=".$vf."&size=".$size."' >".$vf."</a> ";
      }
    ?>
    </p>
    
    <p>Size: 
    <?php
      foreach($nsize as $vs){
        echo "<a href='2004.php?font=".$font."&size=".$vs."' >".$vs."</a> ";
      }
    ?>
    </p>
    
	</body>
</html>