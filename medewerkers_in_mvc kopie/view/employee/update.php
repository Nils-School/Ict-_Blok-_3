	
	<h1>Persoon wijzigen</h1>
	<form name="update" method="post" action="<?=URL?>employee/update/<?php echo $data['id'] ?>"/>
	    <input type="hidden" name="id" value="<?=$employee["id"] ?>"/>
	    <!--  Bouw hier de rest van je formulier   -->
		<?php 
		
		$Err = '';
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
			if (empty($_POST["name"]) or empty($_POST["age"])){
				$Err = "Veld is verplicht";
			}
			else{
				updateAction($_POST,$id);
				
			}
		}
		?>
		<form >
		Naam:<br><input type="text" name="name" value="<?php echo $data['name'] ?>"><span class="error">* <?php echo $Err;?></span></br>
		Leeftijd:<br><input type="number" name="age" value="<?php echo $data['age'] ?>"><span class="error">* <?php echo $Err;?></span></br>
		<input type="submit" value="Update!">
	</form>