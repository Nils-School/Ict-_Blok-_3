<?php 
//maakt error aan zonder waarde
	$Err ='';
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if (empty($_POST["name"]) or empty($_POST["age"])){
			$Err = "Veld is verplicht";
		}
		else{
			store($_POST);
		}
	}
	//als er een veld leeg is vult hij de error, als hij niet leeg is wordt hij naar de controller gestuurd
	?>
<h1>Voeg een medewerker toe</h1>
<form name="create" method="post" action="create">
	<!-- bouw hier je formulier -->
	Naam:<br><input type="text" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}; ?>"><span class="error">* <?php echo $Err;?></span></br>
	Leeftijd:<br><input type="number" name="age" value="<?php if(isset($_POST['age'])){echo $_POST['age'];}; ?>"><span class="error">* <?php echo $Err;?></span></br>
	<input type="submit" value="Maak aan!">
</form>
