<?php session_start(); ?>
<!DOCTYPE html>
<?php include('connexion_bdd.php') ?>
<?php
 if( isset( $_GET["recherche"] ) ) $recherche = $_GET["recherche"]; // Vérification d'existence de recherche (1=oui, 0=non)
  if( isset( $_GET["produit"] ) ) $articles = $_GET["produit"]; // Vérification si l'utilisateur a tapé un fruit/légumes
  ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="css/header1-responsive.css" />
		<link rel = "stylesheet" href="css/recherche-avance.css" />
		<link rel = "stylesheet" href="css/footer.css" />
		<link rel = "stylesheet" href="css/new-offre-container.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
    </head>

    <body>
    	<?php
	if( empty($recherche) or $recherche == 0)
	?>
    	<div class="site-container">
<div class="site-pusher">

<header class = "header">
			<a href="Accueil.php" >
				<img src="css/images/pp_blanc.png" class="header-logo"/>
			</a>
				<nav class="nav-header">
					<div class="nav-header_hamburger" id="nav-header_hamburger"></div>
						<div class="menu">
							<a href="forum.php" class="menu-item">Forum</a>
							<a href="depot_offre.php" class="menu-item">Déposer une annonce</a>
							<a href="Lesoffres.php" class="menu-item">Les offres</a>
							<a href="APropos.php" class="menu-item">A Propos</a>
							<a href="Accueil.php" class="menu-item">Accueil</a>
						</div>
						<div id="search">	
							<form class="barre-recherchetxt" method="GET" action="traitement_recherche(textuelle).php">
							   <p>
							 	<label id="label-header" for ="recherche"></label> 
							 		<input class="input-recherche" type="text" name="recherche" id="recherche" placeholder="Recherche" style="height: 24px "/>
									<input name="searchbutton" type="submit" methode="POST" value="">
							   </p>
							</form>
						</div>
				</nav>
</header>
</body>
</html>