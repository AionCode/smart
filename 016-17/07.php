<html>
	<head>
		<title>IF struktura - grananje</title>
	</head>
	<body>
  <?php
    //prvi primer
    $b = true;
    
    if ($b)
      {
        echo "Tacno <br>";
      }
    echo "kraj <br>";
    
    echo "<hr>";
    
    // drugi primer
    $t = false;
    if ($t)
      {
        echo "Tacno <br>";
      }
    else
      {
        echo "ne tacno <br>";
      }
    
    echo "kraj <br>";
    echo "<hr>";

    // drugi primer - skraceno
    $t = false;
    
    if ($t){
        echo "Tacno <br>";
    } else {
      echo "ne tacno <br>";
    }
    
    echo "kraj <br>";
    echo "<hr>";
    
  ?>
	</body>
</html>