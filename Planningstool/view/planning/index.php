
<?php
		// maak een overzicht lijst van ALLE personen
	?>
	<h1>Overzicht van Games</h1>
			<?php
			echo"<ul>";
			foreach($data as $games){
				?>
				<div class="right">
					<h2><?php echo $games['name']; ?></h2>
				</a>
				<div class="left">
					<img class="image" src="<?php echo URL ?>/images/<?php echo $games['image']; ?>">
				</div>
					<div class="stats">
						<ul class="fa-ul">
							<li><a class="item fas fa-search" href=<?php echo URL.'planning/info/'.$games['id'] ?>></a></li>
							
						</ul>
					</div>
				</div>	
			<?php
			}
			?>
			</ul>
			
			