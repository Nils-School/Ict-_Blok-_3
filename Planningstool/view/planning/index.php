
<?php
		// maak een overzicht lijst van ALLE personen
	?>
	<h1>Overzicht van Games</h1>
			<?php
			echo"<ul>";
			foreach($data as $games){
				?>
				<div class="border bg-white mb-2 w-auto mr-5">
					<h2> <img class="rounded-circle mt-2" width="150" height="150" src="<?php echo URL ?>/images/<?php echo $games['image']; ?>"> <?php echo $games['name']; ?></h2>
					<div class="stats" style="margin-left:500px;">
						<ul class="fa-ul">
							<li><a class="btn btn-info" href=<?php echo URL.'planning/info/'.$games['id'] ?>>Info</a></li>
						</ul>
					</div>
				</div>	
			<?php
			}
			?>
			</ul>
			
			