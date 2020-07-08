<h1>Informatie van <?php echo $data['name'] ?></h1>
<div class="border bg-white">
    <img class="img-fluid mb-4 mr-1 float-left" style="height:300px; width:200px;" src="<?php echo URL ?>/images/<?php echo $data['image']; ?>" />
    <div class="stats mt-2">
        <ul class="fa-ul">
            <li><i class="item fas fa-users"></i> Spelers: <?php echo $data["min_players"]; ?>-<?php echo $data["max_players"]; ?></li>
            <li><i class="item fas fa-clock"></i> Speeltijd: <?php echo $data["play_minutes"]; ?> minuten</li>
            <li><i class="item fas fa-user-clock"></i> Uitlegtijd: <?php echo $data["explain_minutes"]; ?> minuten</li>
            <li><i class="item fas fa-dice"></i> Skills: <?php echo $data["skills"]; ?> </li>
            <li><i class="item fas fa-plus"></i> Expansions: <?php if ($data["expansions"] != null){echo $data["expansions"];} else {echo "Er is geen uitbreiding";}?> </li>
            <li><i class="item fas fa-search"></i>Gamepage: <a href=<?php echo $data["url"];?>><?php echo $data['name'] ?></a></li>
            </br>
            <?php echo $data["description"]; ?> 
        </ul>
    </div>
</div>

<div class="mt-5 mb-5" style="width:500px;">
<?php  echo $data['youtube']; ?>
</div>