
<?php

foreach ($data as $games) {
    $timestamp = strtotime($games['start']) + 60*$games['play_minutes']+60*$games['explain_minutes'] ;
    $time = date('H:i:s', $timestamp);
    ?>

    <h2><?php echo $games['name']; ?></h2>
   
    <div class="stats">
    <ul class="fa-ul">
        <li><i class="item fas fa-calendar"></i> Datum: <?php echo $games['date'];?> <i class="item fas fa-clock"></i> Start: <?php echo $games['start'];?></li>
        <li><i class="item fas fa-user-clock"></i> Speeltijd: <?php echo $games['play_minutes'];?> minuten <i class="item fas fa-user-clock"></i> Spel stopt om: <?php echo $time ?></li>
        <li><i class="item fas fa-dice"></i> Uitlegger: <?php echo $games['explainer'];?> </li>
        <li><a class="item fas fa-search" href=<?php echo URL.'planning/planninginfo/'.$games['id'] ?>></a>Info</li>
        <li><a class="item fas fa-edit" href=<?php echo URL.'planning/editplanning/'.$games['id'] ?>></a>Bewerk</li>
        <li><a class="item fas fa-trash" href=<?php echo URL.'planning/deleteplanning/'.$games['id'] ?>></a>Verwijder</li>
        </br>
    </ul>
</div>
<?php
}
?>	

	
			