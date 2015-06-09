<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="css/depot_offre.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
			<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
    </head>

    <body>
<?php
if(isset($_SESSION['id']))
		{?>

<div class="site-container"> <!--Utile pour le responsive du header seulement-->
<div class="site-pusher"><!--Utile pour le responsive du header seulement-->

<?php include("header1-responsive.php"); ?>

<div class="site-content"><!--Utile pour le responsive du header seulement-->
	<div class="container"><!--Utile pour le responsive du header seulement-->


<!--/////////////////////////////////////////////////////////////
//////////////////////////////     CONTENU  /////////////////////
/////////////////////////////////////////////////////////////////-->

<div class="wrap_depo">

<!--///////////////////////////
/////////    ETAPE 1   ////////
///////////////////////////////-->

		<div class ="title">
				<h1>Déposer une annonce</h1>
		</div>
		<div style="color:red; font-family:arial; font-size:20px;">
		<?php 
		if (isset($_GET['msg']))
		{
			echo $_GET['msg'];
		}
		?></div>
					<div class="sous-title">
						<h2> Que souhaitez-vous faire?</h2>
					</div>
<form action="traitement_depot-offre2.php" method="post">
	
						<section class="QVF">
							<div class="QVF-left">
								
									<input type="radio" name="choix_vente" value="Vendre" required> Vendre
									<input type="radio" name="choix_vente" value="Echanger" required> Echanger
									<input type="radio" name="choix_vente" value="Vendre et Echanger" required> Vendre ou Echanger
							</div>
									<div class="QVF-right">
										<div class="helpme">
											<a href="Aide.php" >?</a>
										</div>
									</div>	
						</section>


					<div class="sous-title">
						<h2> Détail de l'offre</h2>
					</div>

<!--///////////////////////////
/////////    ETAPE 2   ////////
///////////////////////////////-->
						<section class="detail_offre">
							<div class="detail_offre-left">
								<fieldset>
									<p>
										<label for="Cat"> Catégorie : </label>
											<input type="radio" name="choix_produits" value="Fruits" required> Fruit
											<input type="radio" name="choix_produits" value="Légumes" required> légume </br>
											<label for="listefruit"> Produits : </label>
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
										
										<label for="Poids"> Poids : </label> 
											<input name="pdsKg" id="Pds-detail_offre" type="number" min="0" max="50"/> <span> : Kilogrammes</span>
											<input name="pdsG" id="Pds-detail_offre" type="number" step="100" min="0" max="999"/> <span> : Grammes</span></br>
										<label for="Poids"> PRIX : </label> 
											<input name ="prix" id="Pds-detail_offre" type="number" step="1" min="1" max="999"/><span> : Euros</span></br>
									</p>
								</fieldset>
							</div>

							<div class="detail_offre-right">
								<div class="helpme"> 
									<a href="Aide.php" >?</a>
								</div>
							</div>
						</section>
<!--/////////////////////////////////////////
/////////    ETAPE 3 :Localisation   ////////
/////////////////////////////////////////////-->
<div class="sous-title">
	<h2> Localisation</h2>
</div>
<section class="localisation">
	<div class="localisation-left"></div>
			<div class="input-localisation">
				<fieldset>
					<p>
						<label for="REGIONS"> Régions : </label> 
					<select name="REGIONS" style="width:200px">

												<?php
												include("connexion_bdd.php");
												 	?><optgroup label="//Régions"> <?php
												 	$reponse = $bdd->query('SELECT * FROM regions');
												 	foreach ($reponse as $donnees)	
														{
												?>	
													<option value="<?php echo $donnees['nom_regions'] ?>"><?php echo $donnees['nom_regions'] ?></option></optgroup>
												   <?php
												   		}
												   ?>
					</select> </br></br>
					<label for="VILLES"> Villes : </label> 
					<select name="VILLES" style="width:200px">

												<?php
												include("connexion_bdd.php");
												 	?><optgroup label="//Villes"> <?php
												 	$reponse = $bdd->query('SELECT * FROM villes');
												 	foreach ($reponse as $donnees)	
														{
												?>	
													<option value="<?php echo $donnees['nom_villes'] ?>"><?php echo $donnees['nom_villes'] ?></option></optgroup>
												   <?php
												   		}
												   ?>
					</select> </br></br>

					</p>
				</fieldset>
			</div>
	<div class="localisation-right">
		<div class="helpme">
			<a href="Aide.php" >?</a>
		</div>
	</div>	
</section>

<!--///////////////////////////
/////////    ETAPE 4   ////////
///////////////////////////////-->

					<div class="sous-title">
						<h2> Commentaire (facultatif)</h2>
					</div>

						<section class="commentaire">	
							<div class="commentaire-left">
								<fieldset>
						   			<p>
						   				<label name="comment" id="label-exception" for="commentaire"> Ce commentaire apparaîtra dans l'annonce</label><br/>
											<textarea name="comment" id="comentaire-bloc"></textarea>
						   			</p>
								</fieldset>
							</div>

							<div class="commentaire-right">
								<div class="detail_offre-right">
									<div class="helpme"> 
										<a href="Aide.php" >?</a>
									</div>
								</div>
							</div>
						</section>

<!--//////////////////////////////////////////////////
/////////   ETAPE 4 Information Personnelle   ////////
//////////////////////////////////////////////////////-->

				<div class ="title2">
					<h1>Informations personnelles</h1>
				</div>
					<section class="identite">
							<div class="identite-left">
								<h3>Profil</h3>
								<p>
    							Adresse mail  : <?php echo $_SESSION['adresse_mail']; ?><br />
    							Téléphone  — <?php echo $_SESSION['num_tel']; ?><br />
    							</p>
    							<br/>
    							<a href='profil.php' style="color:#0EB377;">Modifier les informations</a> 
							</div>
					</section>

<!--///////////////////////////
/////////    VALIDER   ////////
///////////////////////////////-->

		<div class="bouton">

		<fieldset>
			<p>
				<input name="formpush" class="submit" type="submit" value="Valider >" />
			</p>
		</fieldset>
		</div>



</form>

</div><!--fin du wrap-->





<?php 
} //crochet du if 
	else 
	{?>
<div class="site-container"> <!--Utile pour le responsive du header seulement-->
<div class="site-pusher"><!--Utile pour le responsive du header seulement-->
<?php include("header1-responsive.php"); ?>
<div class="site-content"><!--Utile pour le responsive du header seulement-->
<div class="container"><!--Utile pour le responsive du header seulement-->


	<div class="wrap">
		<div class ="non_connect"> 
			<div class ="title"> 
				<h1 class="title-depot">Déposer une annonce</h1>
			</div>
			<div class="non_connect-proposition">
			 	<p><a href='inscription.php'> Inscrivez vous </a>
			 		ou <a href='connexion.php'>connectez-vous</a> pour pouvoir déposer une offre.
			 	</p>	
			</div>
		</div>
	</div>
		<?php 
			};
		?>
	<br/>
	<br/>
	<br/>
	<br/>
		
		<?php include("footer.php");?>


</div>
</div> 
<div class="site-cache" id="site-cache"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/responsive_header.js"></script>
</div> 
</div>


    </body>
</html>






