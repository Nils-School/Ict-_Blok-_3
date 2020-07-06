<?php
	$Err = '';
	?>
<form name="edit" method="post" action="<?=URL?>planning/storeplan/">
	<select id="game" name="game">
	<?php
foreach($data as $games){
	echo "<option value='$games[id]'>$games[name](Spelers:$games[min_players]-$games[max_players])</option>";
	}
	
    ?>
    </select><br>
	
	Uitlegger:<input type="text" name="explainer" value="<?php if(isset($_POST['explainer'])){echo $_POST['explainer'];}; ?>"><span class="error">* <?php echo $Err;?></span></br></br>
	Datum:<input type="date" name="date"  value="<?php if(isset($_POST['date'])){echo $_POST['date'];}; ?>"><span class="error">* <?php echo $Err;?></span></br></br>
    StartTijd:<input type="time" name="start"  value="<?php if(isset($_POST['start'])){echo $_POST['start'];}; ?>"><span class="error">* <?php echo $Err;?></span></br></br>
    Spelers:<textarea  name="players" rows="3" cols="26"><?php if(isset($_POST['players'])){echo $_POST['players'];}; ?></textarea>*<?php echo $Err;?></span></br>
	<input type="submit" value="Maak aan!">
	</form>
