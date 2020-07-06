<?php 
	$Err = '';

	?>
    <h1>Edit planning</h1>
    <form name="edit" method="post" action="<?=URL?>planning/editAction/<?php echo $data[1]['id'] ?>">
	<select id="game" name="game">
	<?php
foreach($data[0] as $games){
	$selected = '';
	if($games['id'] == $data[1]['game']){
	$selected = 'selected';
	}
	 
	echo"<option value='$games[id]' ".$selected.">$games[name](Spelers:$games[min_players]-$games[max_players])</option>";
	 
	 }

    ?>
    </select><br>
	<input type="hidden" name="id" value="<?= $data[1]['id'] ?>"/>
	Uitlegger:<input type="text" name="explainer" value="<?php echo $data[1]['explainer'] ?>"><span class="error">* <?php echo $Err;?></span></br>
	Datum:<input type="date" name="date" value="<?php echo $data[1]['date'] ?>"><span class="error">* <?php echo $Err;?></span></br></br>
    StartTijd:<input type="time" name="start" value="<?php echo $data[1]['start'] ?>"><span class="error">* <?php echo $Err;?></span></br></br>
    Spelers:<textarea  name="players" rows="3" cols="26"><?php echo $data[1]['players'] ?></textarea>*<?php echo $Err;?></span></br>
	<input type="submit" value="Maak aan!">
	</form>