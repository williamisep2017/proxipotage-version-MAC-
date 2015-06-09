<?php session_start();?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
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
 

 <!--/////////////////////////////////////////////////////////////
//////////////////////////////     CONTENT  //////////////////////
/////////////////////////////////////////////////////////////////-->      

        <div class="wrap-profil">
                    <div id="header-bottom-profil">
                            <ul id="secondmenu" class="list-tabs">
                                <li><a class="a-hover" href="administration_annonce.php">Annonces</a></li>
                                <li><a class="a-hover" href="administration_user.php">Utilisateurs</a></li>
                                <li><a class="a-hover" href="administration_forum.php">Forum(sujets)</a></li>
                                <li><a class="a-hover" href="administration_forum2.php">Forum(commentaires)</a></li>
                            </ul>
                    </div>
        </div>
          <table class="tableau">
            <thead class="premiere_ligne">
                <tr class="tete_colonne">
                    <th class="th">
                        <p class="champs_tab">
                            ID
                        </p>
                    </th>
                    <th class="th">
                        <p class="champs_tab">
                            Pseudo
                        </p>
                    </th>
                    <th class="th">
                        <p class="champs_tab">
                            localisation
                        </p>
                    </th>
                    <th class="th">
                        <p class="champs_tab">
                            mail
                        </p>
                    </th>
                     <th class="th">
                        <p class="champs_tab">
                        </p>
                    </th>
                </tr>
            </thead>
            <tbody> 
      <?php
        include("connexion_bdd.php");
         $us = $bdd->query("SELECT * FROM utilisateurs");
        $us = $us->fetchAll();
        foreach ($us as $ut) {?>
                <tr class="tr"> 
                <td class="td"><p> <?php echo $ut['id']; ?></p></td>
                <td class="td"><p> <?php echo $ut['pseudo']; ?></p></td>
                <td class="td"><p> <?php echo $ut['adresse']; ?></p></td>
                <td class="td"><p> <?php echo $ut['adresse_mail']; ?></p></td>
                 <td class="td"><p> <a href="administration_supr(user).php?id=<?php echo $ut['id'];?>"> Supprimer</a></p></td>
                </tr>
                 <?php } ?>
            </tbody>
        </table>
      
       

</div><!-- container-->
</div> <!-- site content-->

<div class="site-cache" id="site-cache"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/responsive_header.js"></script>
</div> <!-- site pusher-->
</div><!-- site container-->


   </body>
</html>

