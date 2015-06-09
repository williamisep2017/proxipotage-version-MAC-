<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width; initial-scale=1; user-scalable=0"/>
        <title>Proxipotage</title>
        <link rel = "stylesheet" href="css/forum.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />

    </head>

    <body>
                                                                <div class="site-container"> <!--Utile pour le responsive du header seulement-->
                                                                <div class="site-pusher"><!--Utile pour le responsive du header seulement-->

                                                                <?php include("header1-responsive.php"); ?>

                                                                <div class="site-content"><!--Utile pour le responsive du header seulement-->
                                                                <div class="container"><!--Utile pour le responsive du header seulement-->
    <?php include("connexion_bdd.php"); ?>

    <div class="wrap-forum">
    <div align="center" class="title">
        <h1>Forum</h1>
    </div>


    <div class="forum">
          
            <?php
            if (isset($_GET['categorie'])){ /* SI ON EST DANS UNE CATEGORIE ON PEUT VOIR LES DIFFERENTS SUJETS QUI S'Y RAPPORTE*/
                $_GET['categorie']=htmlspecialchars($_GET['categorie']);
                ?>

                <div class="ajouter">
                    <div align="center" class"bouton_sujet">

                        <?php if (isset($_SESSION['id'])){?> <a href="addPost.php">Ajouter un sujet</a> 
                        <?php } 
                        else{?> <a href="non-inscrit(forum).php">Ajouter un sujet</a> <?php } ?>
                    </div>
                </div>

            <?php 
            $categorie=$_GET['categorie'];
            if($categorie="fruits"){
                $req=$bdd->query('SELECT * FROM sujet');
                while($affichage=$req->fetch()){
                ?>
            
            <div class="cadre">
                <p> 
                    <div class="sujet">
                        <strong> Sujet : <?= $affichage['name']; ?> </strong><br/> 
                    </div><i><?= $affichage['contenu']?></i>
                </p> 
            </div>

            <div style="font-family:arial;" align="center" class"bouton_commenter"> 
                <?php if (isset($_SESSION['id'])){?><a href="reponse.php?id_sujet=<?php echo $affichage['id_sujet']; ?>">Commenter</a> <?php } 
            else{?> <a href="non-inscrit(forum).php">Commenter</a> <?php } ?> 
            </div> 

            <div class="petitcadre">
            <?php
                $req2=$bdd->query('SELECT comm.contenu FROM sujet INNER JOIN comm ON comm.id_sujet = sujet.id_sujet WHERE sujet.id_sujet = '.$affichage['id_sujet']);
            while($affichage2=$req2->fetch()){
              ?> <div class=commentaire> <?php echo $affichage2["contenu"]; ?></div><?php
            }
            ?>
            </div><br/><?php

           }
                
            }

            elseif($categorie="légumes"){
                $req=$bdd->query('SELECT * FROM sujet WHERE id_categories="1"');
                while($affichage=$req->fetch()){
                ?><h1>  <?= $affichage['name']; ?><?= $affichage['contenu']?></h1> <?php
                }
                }              
                ?>
                <?php
            }

            else{                                                            /*SI ON EST SUR LA PAGE NORMALE */ 
                $requete=$bdd->query('SELECT * FROM categories');
                while($reponse = $requete->fetch()){
                ?>
                <div class="categories">
                <a href="forum.php?categorie=<?php echo $reponse['name'];?>"><?php echo $reponse['name'];?></a>
                </div>

                <?php
                }
                }
                ?>

</div>
</div>
                                                                        </div><!-- container-->
                                                                        </div> <!-- site content-->
                                                                        <div class="site-cache" id="site-cache"></div>
                                                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                                                                        <script type="text/javascript" src="js/responsive_header.js"></script>
                                                                        </div> <!-- site pusher-->
                                                                        </div> <!-- site container-->
</body>
</html>
 