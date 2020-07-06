	<?php
		// maak een overzicht lijst van ALLE personen
	?>
	<h1>Overzicht van personen</h1>
			<?php
			// de opbouw van de link bepaald welke method in welke controller aangeroepen wordt.
			// het woordje "employee" in de url betekent dat het framework moet zoeken naar een controller genaamd "EmployeeController".
			// Hij maakt van de eerste letter een hoofdletter en plakt er zelf "Controller" achter.
			// Het woordje "update" of "delete" betekent dat hij in deze controller moet zoeken naar een method met deze naam.
			
			echo"<ul>";
			foreach($data as $person){
				echo "<li>";
				echo $person['name']." is ".$person['age']." jaar oud  ";
				echo "<a href=".URL."employee/update/".$person['id'].">Wijzigen</a> ";
				echo "<a href=".URL."employee/delete/".$person['id'].">Verwijderen</a> ";
				echo "</li>";
				
			}
			echo"</ul>";
			
			?>
		
	