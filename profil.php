<?php session_start();?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="css/profil.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
			<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
    </head>
    <body>
<div class="site-container"> <!--Utile pour le responsive du header seulement-->
    <div class="site-pusher"><!--Utile pour le responsive du header seulement-->

        <?php include("header1-responsive.php"); ?>

        <div class="site-content"><!--Utile pour le responsive du header seulement-->
            <div class="container"><!--Utile pour le responsive du header seulement-->
<!--////////////////////////////////////////////////////////////////
//////////////////////////////     Content  ////////////////////////
////////////////////////////////////////////////////////////////////-->

  <div class="wrap-profil">
                       <div id="header-bottom-profil">
                            <ul id="secondmenu" class="list-tabs">
                                <li><a class="a-hover" href="profil.php">Profil</a></li>
                                <li><a class="a-hover" href="modification_profil.php">Modifier</a></li>
                                <li><a class="a-hover" href="offres_profil.php">Offres</a></li>
                            </ul>
                    </div>
                            <div class="main-title">
                                <h1 class="title-profil">Mon profil</h1>
                            </div>
 
                <div class="page-profil">
                    <div class="infos-profil">
                            <h3 class="infos-tittle"> Informations personnelles </h3>
                            
                            <div class="elements"> pseudo : <?php echo $_SESSION['pseudo'];?> </div>
                            <div> Né(e) le : <?php echo $_SESSION['dte_de_naissance'];?> </div>
                    </div>
                    <div class="infos-profil">
                            <h3 class="infos-tittle"> Mes cordonnés</h3>
                            <div class="elements"> adresse de localisation : <?php echo $_SESSION['adresse'];?> </div><br/>
                            <div><br/> teléphone : <?php echo $_SESSION['num_tel'];?> </div>
                    </div>
                    <div class="infos-profil">
                            <h3 class="infos-tittle"> Email</h3>
                            <div class="elements"> Votre adresse email est : <?php echo $_SESSION['adresse_mail'];?> </div>
                    </div>
                    <div class="infos-profil">
                            <h3 class="infos-tittle"> Mots de passe</h3>
                            <div class="elements"> ********* </div>
                    </div>
                </div>
</div>
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

