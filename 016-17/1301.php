<html>
	<head>
		<title>petlja - foreach</title>
	</head>
	<body>
  <?php
  
  $n = array(13,-4,"ana",0,array(23,"aa"),-76,"milan",67,-9,64,array(36,-98, "ee"),18,-59,"filip", 34);
  
 
  
  foreach($n as $k => $v){
    if (is_array($v)){
      foreach($v as $k1 => $v1){ 
        echo $k . " - " . $k1 . " => ".$v1 . "<br>";
      }
    } else {
      echo $k . " => ".$v . "<br>";
    }
  }
  
  ?>
  
	</body>
</html>