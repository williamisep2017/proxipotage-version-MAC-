<div class="recherche-avance">
	<div class="wrap">
		<form method="GET" action="traitement_recherche(avance).php">
			<h1 class="title-recherche-avance">Recherche avancée</h1>

			
					<div class="liste">
						<div class="liste-left">
							<h2 class="title-bis"> Produits</h2>
				    				<select name="NOM" style="width:200px">
												<option selected>Sélectionner un produits
				    						<optgroup label="fruits">
												<?php
													include("connexion_bdd.php");	 
												 	$reponse = $bdd->query("SELECT * FROM fruits WHERE id IN (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 23, 24, 26, 27, 28, 29, 30, 31, 32, 33, 35, 36, 37, 38, 39);");
												 	foreach ($reponse as $donnees)	
													{?>
													<option value="<?php echo $donnees['fruit'] ?>"><?php echo $donnees['fruit'] ?></option>
												<?php
												   	}?>
											<optgroup label="legumes">
												 <?php
													include("connexion_bdd.php");	 
												 	$reponse = $bdd->query("SELECT * FROM fruits WHERE id IN (40, 41, 43, 44, 45, 46, 47, 48, 49, 50, 51, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 66, 67, 68, 69, 70, 71, 72, 73);");
												 	foreach ($reponse as $donnees)	
													{?>
													<option value="<?php echo $donnees['fruit'] ?>"><?php echo $donnees['fruit'] ?></option>
												<?php
												   	}?>
												</select> </br></br> 
				    		 
						</div>
			
					<div class="liste-right">
							<h2 class="title-bis">lieu</h2>
					  						<select name="REGIONS" style="width:200px">
												<option selected>Régions
												<?php
												include("connexion_bdd.php");
												 	$reponse = $bdd->query('SELECT * FROM regions');
												 	foreach ($reponse as $donnees)	
													{
												?>	
												<option value="<?php echo $donnees['nom_regions'] ?>"><?php echo $donnees['nom_regions'] ?></option>
												   <?php
												   	}
												   ?>
											</select> 
											<select name="VILLES" style="width:200px">
												<option selected>Villes
												<?php
												include("connexion_bdd.php");	
												 	$reponse = $bdd->query('SELECT * FROM villes');
												 	foreach ($reponse as $donnees)	
													{
												?>	
												<option value="<?php echo $donnees['nom_villes'] ?>"><?php echo $donnees['nom_villes'] ?></option>
												   <?php
												   	}
												   ?>
											</select> 
				
							</div>
					</div>
					<input class="RA-button" name="searchpush" type="submit" value="Rechercher">
					<?php
					if (isset($_GET['msg']))
		{
			echo $_GET['msg'];
		}?>
			</form>
	</div>
</div>


