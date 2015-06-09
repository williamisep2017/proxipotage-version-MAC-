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
                                <h1 class="title-profil">Modifier mes informations</h1>
                            </div>
                            <?php 
        if (isset($_GET['msg_modif']))
        {
            echo $_GET['msg_modif'];
            set_time_limit(5);
        }
         if (isset($_GET['msg1_modif']))
        {
            echo $_GET['msg1_modif'];
            set_time_limit(5);
        }?>

                <form action="traitement_modif_profil.php" method="post">
                    <div class="mod_profil"> 
                    <h3 class="infos-tittle"> Informations personnelles </h3>
                    </div>


                <section class="modif_global">
                                <div class="modif1">                           

                                

                                    <label>Pseudo : </label><input class="pseudo_profil" type="text" name="pseudo" onblur="verifPseudo(this)" value=<?php echo $_SESSION['pseudo']?>>
                                    <label>Date de naissance : </label><input type="date" name="dte_de_naissance" value= <?php echo $_SESSION['pseudo']?>>
                            </div>  
                </section>

                <div class="mod_profil"> 
                        <h3 class="infos-tittle"> Mes cordonnés</h3>
                </div>

                <section class="modif_global">
                    <div class="modif1">
                                    <label>Adresse de localisation : </label><input class="adresse_profil" type="text" name="adresse" value= <?php echo $_SESSION['adresse']?> ><br/>
                                    <label>Téléphone : </label><input type="tel" name="num_tel" value=<?php echo $_SESSION['num_tel']?> >
                    </div>  
                </section>

                <div class="mod_profil"> 
                    <h3 class="infos-tittle"> Email</h3>
                </div>

                <section class="modif_global">
                        <div class="modif1">      
                                    <label>Email : </label><input class="pseudo_profil" type="mail" name="adresse_mail" onblur="verifPseudo(this)" value=<?php echo $_SESSION['adresse_mail']?>>
                            </div>  
                </section>

                <div class="mod_profil"> 
                            <h3 class="infos-tittle"> Mots de passe</h3>
                </div>

                <section class="modif_global">
                    <div class="modif1">
                                    <label>Mot de passe : </label><input class="pseudo_profil" type="password" name= "password1" value<?php echo $_SESSION['mot_de_passe']?>>
                                    <label>Confirmation mot de passe : </label><input class="pseudo_profil" type="password" name= "password2" > <br/>    <br/><br/><br/>
                                    <input name="enregistrer" class="bouton_enregistrer" type="submit" value="Enregistrer" />
                    </div>  
                </section>
    </form>
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

