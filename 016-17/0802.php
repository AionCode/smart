<html>
	<head>
		<title>IF elseif</title>
	</head>
	<body>
  <?php
  //za datu vrednost ispitati koliko ima cifara
  
  $a = 12358;
  
  if ($a>=0 and $a<=9){
    echo "jednocifren broj";
  } elseif ($a>=10 and $a<=99){
    echo "Dvocifren broj";
  } elseif ($a>=100 and $a<=999){
    echo "Trocifren broj";
  } elseif ($a>=1000 and $a<=9999){
    echo "Cetvorocifren broj";
  } else {
    echo "Ntocifren broj";
  }
  
  ?>
	</body>
</html>