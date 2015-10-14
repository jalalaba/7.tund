<?php

require_once("edit_functions.php");
	//aadressrireal on ?edit_id siis tr¸kin v‰lja selle v‰‰rtuse
	if(isset($_GET["edit_id"])){
		echo $_GET["edit_id"];
		//id oli aadressireal
		//tahaks √ºhte rida k√µige uuemaid andmeid kus id on $_GET["edit_id"]
		
		$car=getEditData($_GET["edit_id"]);
		var_dump($car);
		
		}else{
		//ei olnud aadressireal
		echo "Viga";
		//die - edasi lehte ei laeta
		//die();
		header("Location:table.php");
	}

?>

<h2>Lisa autonumbrim√§rk</h2>
<form action="data.php" method="post">
	<label for="number_plate">Auto numbrim√§rk</label><br>
	<input id="number_plate" name="number_plate" type="text"  value=""><br><br>
	<label for="color">V√§rv</label><br>
	<input id="color" name="color" type="text" value=""><br><br>
	<input name="add_plate" type="submit" value="Salvesta"> 
</form>