<html>
	<head>
		<title>Switch - višestruko grananje</title>
	</head>
	<body>
  <?php
  // za unetu vrednost prikazati dan u nedelje
  $d = 3;
  
  switch ($d){
    case 1:
      echo "ponedeljak";
    break;
    
    case 2:
      echo "utorak";
    break;
    
    case 3:
      echo "sreda";
    break;
    
    case 4:
      echo "cetvrtak";
    break;
    
    case 5:
      echo "petak";
    break;
    
    case 6:
      echo "subota";
    break;
    
    case 7:
      echo "nedelja";
    break;
    
    default:
      echo "greška";
  }
  
  
  ?>
	</body>
</html>