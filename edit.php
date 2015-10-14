<?php


require_once("edit_functions.php");

if(isset($_POST["update_plate"])){
	//vajutas salvesta nuppu
	//number plate ja color tulevad vormist aga id aadressirealt
	
	updateCar($_POST["id"],$_POST["number_plate"],$_POST["color"]);
	}
	//aadressrireal on ?edit_id siis tr�kin v�lja selle v��rtuse
	if(isset($_GET["edit_id"])){
		echo $_GET["edit_id"];
		//id oli aadressireal
		//tahaks ühte rida kõige uuemaid andmeid kus id on $_GET["edit_id"]
		
		$car=getEditData($_GET["edit_id"]);
		var_dump($car);
		
		}else{
		//ei olnud aadressireal
		echo "Viga";
		//die - edasi lehte ei laeta
		//die();
		//header("Location:table.php");
	}

?>

<h2>Muuda autonumbrimärkki</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<input type="hidden" name="id" value="<?=$_GET["$edit_id"];?>">
	<label for="number_plate">Auto numbrimärk</label><br>
	<input id="number_plate" name="number_plate" type="text"  value="<?=$car->number_plate;?>"><br><br>
	<label for="color">Värv</label><br>
	<input id="color" name="color" type="text" value="<?=$car->color;?>"><br><br>
	<input name="update_plate" type="submit" value="Salvesta"> 
</form>