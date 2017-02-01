<?php
if(isset($_POST["submit"])){
  $a = $_POST["a"];
  $b = $_POST["b"];
  $o = $_POST["operacija"];
  if ($a!="" and $b!=""){
    switch ($o){
      case "+":
        $r = $a + $b;
        break;
      case "-":
        $r = $a - $b;
        break;
      case "*":
        $r = $a * $b;
        break;
      case "/":
        $r = $a / $b;
        break;
    }
    echo $r . "<hr>";
  }else{
    echo "Unesite vrednosti A i B.";
  }
}
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    
    <label>Unesite A:</label>
    <input type="text" name="a" /><br>

    <label>Unesite B:</label>
    <input type="text" name="b" /><br>
    
     <label>Izaberite operaciju:</label>
     <select name="operacija">
      <option value="+" >+</option>
      <option value="-" >-</option>
      <option value="*" >*</option>
      <option value="/" >/</option>
     </select>
    
    <br>
    <input type="submit" name="submit" value="Izračunaj" />
    
  </form>
  
	</body>
</html>

