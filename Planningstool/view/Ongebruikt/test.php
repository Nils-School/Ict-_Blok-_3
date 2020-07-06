<?php 
//maakt error aan zonder waarde
	$Err ='';
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
			store($_POST);
		
	}
	//als er een veld leeg is vult hij de error, als hij niet leeg is wordt hij naar de controller gestuurd
	?>
<h1>Voeg een medewerker toe</h1>
<form name="create" method="post" action="create">
	<!-- bouw hier je formulier -->
	Naam:<br><input type="text" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}; ?>"><span class="error">* <?php echo $Err;?></span></br>
	Plaatje:<br><input type="text" name="image" value="<?php if(isset($_POST['image'])){echo $_POST['image'];}; ?>"><span class="error">* <?php echo $Err;?></span></br>
	Beschrijving:<br><textarea  name="description" rows="5" cols="40"><?php if(isset($_POST['description'])){echo $_POST['description'];}; ?></textarea>*<?php echo $Err;?></span></br>
	Uitbreiding:<br><input type="text" name="expansions" value="<?php if(isset($_POST['expansions'])){echo $_POST['expansions'];}; ?>"><span class="error">* <?php echo $Err;?></span></br>
	Skills:<br><input type="text" name="skills" value="<?php if(isset($_POST['skills'])){echo $_POST['skills'];}; ?>"><span class="error">* <?php echo $Err;?></span></br>
	Link:<br><input type="text" name="url" value="<?php if(isset($_POST['url'])){echo $_POST['url'];}; ?>"><span class="error">* <?php echo $Err;?></span></br>
	Youtube:<br><input type="text" name="youtube" value="<?php if(isset($_POST['youtube'])){echo $_POST['youtube'];}; ?>"><span class="error">* <?php echo $Err;?></span></br>
	Minimaal spelers:<br><input type="number" name="min_players" value="<?php if(isset($_POST['min_players'])){echo $_POST['min_players'];}; ?>"><span class="error">* <?php echo $Err;?></span></br>
	Maximaal spelers:<br><input type="number" name="max_players" value="<?php if(isset($_POST['max_players'])){echo $_POST['max_players'];}; ?>"><span class="error">* <?php echo $Err;?></span></br>
	Speeltijd:<br><input type="number" name="play_minutes" value="<?php if(isset($_POST['play_minutes'])){echo $_POST['play_minutes'];}; ?>"><span class="error">* <?php echo $Err;?></span></br>
	Uitlegtijd:<br><input type="number" name="explain_minutes" value="<?php if(isset($_POST['explain_minutes'])){echo $_POST['explain_minutes'];}; ?>"><span class="error">* <?php echo $Err;?></span></br>
	<input type="submit" value="Maak aan!">
</form>
<?php
function createEmployee($name,$image,$description,$expansions,$skills,$url,$youtube,$min_player,$max_player,$play_minutes,$explain_minutes){
    // Maak hier de code om een medewerker toe te voegen
   try{
    // Open de verbinding met de database
    $conn=openDatabaseConnection();
    // Zet de query klaar door middel van de prepare method
    $stmt = $conn->prepare("INSERT INTO games (name, image, description,expansions, skills, url, youtube, min_player, max_player, play_minutes, explain_minutes) VALUES('$name','$image','$description','$expansions','$skills','$url','$youtube','$min_player','$max_player','$play_minutes','$explain_minutes') ");
    $stmt->execute();
   }
   catch(PDOException $e){

    echo "Connection failed: " . $e->getMessage();
    }
    // Maak de database verbinding leeg. Dit zorgt ervoor dat het geheugen
    // van de server opgeschoond blijft
    $conn = null;
}


    //1. Maak een nieuwe medewerker aan met de data uit het formulier en sla deze op in de database
    $result = createEmployee($result["name"] , $result["image"] , $result["description"] ,$result['expansions'], $result["skills"] , $result["url"] , $result["youtube"], $result["min_player"], $result["max_player"], $result["play_minutes"], $result["explain_minutes"]);
    //2. Bouw een url op en redirect hierheen
    header('Location: ./index');
  

            empty($_POST["name"]) or 
			empty($_POST["image"]) or 
			empty($_POST["description"]) or 
			empty($_POST["expansions"]) or 
			empty($_POST["skills"]) or
			empty($_POST["url"]) or
			empty($_POST["youtube"]) or
			empty($_POST["min_players"]) or
			empty($_POST["max_players"]) or
			empty($_POST["play_minutes"]) or
            empty($_POST["explain_minutes"]);
            
            $result["name"];
            $result["image"];
            $result["description"];
            $result["expansions"];
            $result["skills"];
            $result["url"];
            $result["youtube"];
            $result["min_players"];
            $result["max_players"];
            $result["play_minutes"];
            $result["explain_minutes"];
            ?>