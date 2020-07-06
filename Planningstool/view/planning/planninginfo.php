<h1>Informatie over planning</h1>
<h2><?php echo $data["name"]; ?></h2>
<img class="img-fluid p-1 w-25 h-25" src="<?php echo URL ?>/images/<?php echo $data['image']; ?>" />
<div class="stats">
    <ul class="fa-ul">
        <li><i class="item fas fa-users"></i> Spelers: <?php echo $data["min_players"]; ?>-<?php echo $data["max_players"]; ?></li>
        <li><i class="item fas fa-user"></i> Spelers: <?php echo $data["players"]; ?> </li>
        <li><i class="item fas fa-user-clock"></i> Uitlegger: <?php echo $data["explainer"]; ?> </li>
        <li><i class="item fas fa-clock"></i> Speeltijd: <?php echo $data["play_minutes"]; ?> minuten</li>
        <li><i class="item fas fa-user-clock"></i> Uitlegtijd: <?php echo $data["explain_minutes"]; ?> minuten</li>
        <li><i class="item fas fa-clock"></i> Start: <?php echo $data["start"]; ?> </li>   
        <li><i class="item fas fa-dice"></i> Skills: <?php echo $data["skills"]; ?> </li>
        <li><i class="item fas fa-plus"></i> Expansions: <?php if ($data["expansions"] != null){echo $data["expansions"];} else {echo "Er is geen uitbreiding";}?> </li>
        <li><i class="item fas fa-search"></i>Gamepage: <a href=<?php echo $data["url"];?>><?php echo $data['name'] ?></a></li>
        </br>
        <?php echo $data["description"]; ?> 
    </ul>
</div>
<?php 
echo $data['youtube'];
?>