<?php session_start();?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <meta id="viewport" name="viewport" content ="width=768, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="css/Accueil.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
			<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
    </head>

   	 <body>
<div class="site-container"> <!--Utile pour le responsive du header seulement-->
<div class="site-pusher"><!--Utile pour le responsive du header seulement-->

<?php include("header1-responsive.php"); ?>

<div class="site-content"><!--Utile pour le responsive du header seulement-->
	<div class="container"><!--Utile pour le responsive du header seulement-->

<!--/////////////////////////////////////////////////////////////
//////////////////////////////     HEADER-BOTTOM  ///////////////
/////////////////////////////////////////////////////////////////-->

		<section class="header-bottom">
			<div class="header-bottom_bienvenue">
				<h4 id="header-bottom_title1">Bienvenue sur ProxiPotage,</h4>
				<h1 id="phrase-accroche">Votre potager à proximité de chez vous !</h1>
				<p id="phrase-explicative">Achetez, vendez, échanger des fruits et légumes entre particuliers</p>	
<?php include("connexion_bdd.php");?>
				<section class="clic">
					<a href="APropos.php">
						<div class="clic_bouton"> 
							En savoir plus
						</div>
					</a>		
				</section>
			</div>
			<?php
				if(isset($_SESSION['id']))
				{
			?>
				<div id='header-bottom_inscription-txt1'>
				<a href='deconnexion.php'>Se déconnecter  | </a>
				<a href='profil.php'>Mon compte</a><br/>
				</div>
			<?php 
				}
			else {
				?>
				<div id='header-bottom_inscription-txt'>
				<a href='connexion.php'>Se connecter  | </a>
				<a href='inscription.php'>S'inscrire</a> 
				</div>
		<?php } ?>
		</section>

	

<!--//////////////////////////////////////////////////////////////////////////
//////////////////////////////     MAIN-CONTENT(AJOUT RECENT)  ///////////////
//////////////////////////////////////////////////////////////////////////////-->
	<div class="content">	
			<div class="cb"></div>
		<h1 class="title-new">Parcourir les offres récemment mises en ligne</h1>
	</div>
		<?php include("new-offre-container.php"); ?>							
				<a href="Lesoffres.php">
					<div id="bouton-voir-toutes-les-offres"> 
						<p>Voir toutes les offres</p> 
					</div>
				</a>
		


		<?php include("footer.php");?>


</div><!-- container-->
</div> <!-- site content-->
<div class="site-cache" id="site-cache"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/responsive_header.js"></script>
</div> <!-- site pusher-->
</div> <!-- site container-->




   	</body>
</html>

