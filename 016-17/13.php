<html>
	<head>
		<title>petlja - foreach</title>
	</head>
	<body>
  <?php
  
  //$n = array(13,-4,0,98,-76,67,-9,64,18,-59,34);
  //$n =array("ana", "milan", "filip");
  $n = array("moj" => "tata", "tvoja" => "mama", "njen" => "deda");
  
  foreach($n as $v){
    echo $v . ", ";
  }
  echo "<hr>";
  
  foreach($n as $k => $v){
    echo $k . " => ".$v . "<br>";
  }
  
  ?>
  
	</body>
</html>