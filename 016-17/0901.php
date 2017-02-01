<html>
	<head>
		<title>Switch - višestruko grananje</title>
	</head>
	<body>
  <?php
  
  $z = "nene";
  
  switch ($z){
    case "da":
      echo "Drago nam je";
    break;
    
    case "ne":
      echo "Zao nam je";
    break;
    
    case "mozda":
      echo "Trudimo se";
    break;
    
    default:
      echo "ostalo";
  }

  ?>
	</body>
</html>