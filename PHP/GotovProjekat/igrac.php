<?php
include_once ("db.php");

function dropPO($conn, $sif_po){
	// Dropdown lista Države
		$sql_dr="SELECT `sif_pl_org`, concat(`naz_pl_org`,' ',`mesto_pl_org`) as klub FROM `pl_org` ORDER BY klub;";

    $result_dr = mysqli_query($conn, $sql_dr);
		if (!$result_dr) {
			die ("Doslo je do greske nad upitom Lista Pl. organizacija!");
		}	
		$lista="<option value=0>Izaberi</option>";	
    while($row_po = mysqli_fetch_assoc($result_dr)){
			$lista.="<option value=".$row_po['sif_pl_org'];
			if($sif_po==$row_po['sif_pl_org']){
				$lista.=" selected='selected'";
			}
			$lista.=">".$row_po['klub']."</option>\n";
		}
		return $lista;
}	

include("header.php");
include("nav.php");

?>
	<main>
		<content>
			<article>
				<h2>Igrači</h2>
<?php	
//Aktivnosti - POST
if(isset($_POST['send'])){
  // Novi slog	
	if($_POST['send']=="Sačuvaj"){
    //Proveravamo da li su sva polja popunjena
    if($_POST['f_ime']=="" and $_POST['f_prezime']=="" and $_POST['f_dat_rodjenja']=="" and $_POST['f_sif_kluba']==""){
			echo "<p class=poruka>Morate popuniti obavezna polja!</p>";
		}else{
			//Dodavanje sloga 
			$sql = "INSERT INTO igrac (`sif_igrac`, `ime_i`, `prezime_i`, `dat_rodjenja_i`, `sif_pl_org`)
			  VALUES (0,'".$_POST['f_ime']."','".$_POST['f_prezime']."','".$_POST['f_dat_rodjenja']."',".$_POST['f_sif_pl_org'].");";

      $result = mysqli_query($conn, $sql);
			if (!$result) {
				die ("Doslo je do greske nad upitom INSERT!");
			}	
			echo "<p class='poruka' >Uspešno ste dodali.</p>";
		}
  }
  //Izmene sloga
	if($_POST['send']=="Izmeni"){
    $sql = "UPDATE igrac SET ime_i='".$_POST['f_ime']."', prezime_i='".$_POST['f_prezime']."', dat_rodjenja_i='".$_POST['f_dat_rodjenja']."', sif_pl_org=".$_POST['f_sif_pl_org']." WHERE sif_igrac = ".$_POST['f_sif_igraca'].";";

		$result = mysqli_query($conn, $sql);
		if (!$result) {
			die ("Doslo je do greske nad upitom za IZMENU!");
		}
		echo "<p class='poruka' >Uspešno ste izmenuli.</p>";	
  }
  //Brisanje sloga
	if($_POST['send']=="Brisanje"){
    $sql="DELETE FROM igrac WHERE sif_igrac=".$_POST['f_sif_igraca'].";";
		
		$result = mysqli_query($conn, $sql);
		if (!$result) {
			die ("Doslo je do greske nad upitom za BRISANJE!");
		}	
		echo "<p class='poruka' >Uspešno ste obrisali.</p>";
  }
}

//AKCIJA - GET
if(isset($_GET['akcija'])) {
	// Novi slog
	if($_GET['akcija']=="new"){
		echo "<h2>Novi</h2>";
		$data["btn_submit"] = "Sačuvaj";
    //prazni kontrole
    $data["sif_igrac"] = "";
		$data["ime"] = "";
		$data["prezime"] = "";
		$data["dat_rodjenja"] = "";
		$data["sif_pl_org"] = "";
    $lista=dropPO($conn, 0);
	}
	// Izmena sloga
	if($_GET['akcija']=="edit"){
		echo "<h2>Izmena</h2>";
		$data["btn_submit"] = "Izmeni";
	}
	// Brisanje sloga
	if($_GET['akcija']=="del"){	
		echo "<h2>Brisanje</h2>";
		$data["btn_submit"] = "Brisanje";
	}
  // Puni kontrole sadržajem
  if($_GET['akcija']=="edit" or $_GET['akcija']=="del"){
		$sql="SELECT * FROM igrac WHERE sif_igrac=".$_GET['sif'];
		$result = mysqli_query($conn, $sql) or die (mysqli_error($conn)." $sql");
		$row = mysqli_fetch_assoc($result);
		$data["sif_igrac"] = $row['sif_igrac'];
		$data["ime"] = $row['ime_i'];
		$data["prezime"] = $row['prezime_i'];
		$data["dat_rodjenja"] = $row['dat_rodjenja_i'];
		$data["sif_pl_org"] = $row['sif_pl_org'];
    $lista=dropPO($conn, $row['sif_pl_org']);
	}
?>  
  <!-- Formular -->
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

		<input type="hidden" name="f_sif_igraca" value="<?php echo $data["sif_igrac"]; ?>"><br>
		
		<label>Ime:</label>
		<input type="text" name="f_ime" value="<?php echo $data["ime"]; ?>"><br>

		<label>Prezime:</label>
		<input type="text" name="f_prezime" value="<?php echo $data["prezime"]; ?>"><br>
		
		<label>Datum rođenja:</label>
		<input type="date" name="f_dat_rodjenja" value="<?php echo $data["dat_rodjenja"]; ?>"><br>

		<label>Klub:</label>
		<input type="text" name="f_sif_pl_org" value="<?php echo $data["sif_pl_org"]; ?>">
    <select name="f_sif_pl_org"><?php echo $lista; ?></select><br>

		<input type="submit" name="send" value="<?php echo $data["btn_submit"]; ?>">
		<button type="link"  href="<?php echo $_SERVER['PHP_SELF']; ?>">Odustani</button>
		
	</form>

<?php  
} else {
  //sortiranje
  if (isset($_GET['sort'])){
		if ($_GET['sort']=="ime"){
			$sort = "ime_i";
		}
		if ($_GET['sort']=="prezime"){
			$sort = "prezime_i";
		}
	} else {
		$sort = "sif_igrac desc";
	}
  
  $sql="select *, concat(naz_pl_org,' ',mesto_pl_org) as klub ";
	$sql.="from igrac ";
	$sql.="INNER JOIN pl_org on igrac.sif_pl_org = pl_org.sif_pl_org ";
  $sql.="order by ".$sort;

	$result = mysqli_query($conn, $sql);
	if (!$result) {
		die ("Doslo je do greske nad upitom Listanje!");
	}
?>
  <!-- Listing sadržaja -->
  <table border=1>
		<tr>
			<th>Šifra</th>
			<th><a href="<?php echo $_SERVER['PHP_SELF'].'?sort=ime' ?>" >Ime</a></th>
			<th><a href="<?php echo $_SERVER['PHP_SELF'].'?sort=prezime' ?>" >Prezime</a></a></th>
			<th>Datum rođenja</a></th>
			<th>Pl. org - Mesto</th>
      <th> </th>
			<th><a href="<?php echo $_SERVER['PHP_SELF'].'?akcija=new' ?>" class=btn>Novi</a></th>
		</tr>
		<?php
		foreach($result as $row){
			echo "<tr>";
        echo "<td>".$row['sif_igrac']."</td>";
				echo "<td>".$row['ime_i']."</td>";
				echo "<td>".$row['prezime_i']."</td>";
        echo "<td>".$row['dat_rodjenja_i']."</td>";
				echo "<td>".$row['klub']."</td>";
        echo "<td><a href='". $_SERVER['PHP_SELF']."?akcija=edit&sif=".$row['sif_igrac']."' class=btn>Izmeni</a></td>";
				
				echo "<td><a href='". $_SERVER['PHP_SELF']."?akcija=del&sif=".$row['sif_igrac']."' class=btn>Brisanje</a></td>";
			echo "</tr>";	
		}
	echo "</table>";
	echo "<p>Ukupan broj: ". mysqli_num_rows($result)."</p>";
}
  ?>
   </article>
        </content>
        
        <?php include("aside.php"); ?>
      </main>

<?php
include("footer.php");

mysqli_close($conn);
?>