<!DOCTYPE html>
<?php session_start(); ?>

<html>
 <head>
        <meta charset="utf-8" />
        <title>Proxipotage</title>
        <link rel = "stylesheet" href="css/offres_profil.css" />
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

<!--///////////////////////////////////////////////////////////////////////////////
//////////////////////////////     Les différentes annonces   /////////////////////
///////////////////////////////////////////////////////////////////////////////////-->
<div class="wrap-profil">

<section id="header-bottom-profil">
        <section id="containers"> 
            <ul id="secondmenu" class="list-tabs">
                <li><a href="profil.php">Profil</a></li>
                <li><a href="modification_profil.php">Modifier</a></li>
                <li><a href="offres_profil.php">Offres</a></li>
            </ul>
        </section>
    </section>

</div>
<div class="wrap-lesoffres">
    <div class ="offres">
        <h3 class="title-lesoffres">Mes offres</h3>
    </div>
    
    <?php include("connexion_bdd.php");     
    $reponse = $bdd->query("SELECT * FROM annonce INNER JOIN utilisateurs ON utilisateurs.id = annonce.userid WHERE id= '".$_SESSION['id']."' ORDER BY date_ajout DESC");
    //$reponse = $bdd->query("SELECT * FROM annonce INNER JOIN fruits ON annonce.NOM = fruits.fruit ORDER BY date_ajout ");
    foreach ($reponse as $liste) {     
    $fruit = $liste['NOM'];    
    ?>   
    <div class="produit">
        <div class="column-left">
        <?php $rep = $bdd->query("SELECT * FROM fruits WHERE fruit= '".$fruit."'");
        //$reponse = $bdd->query("SELECT * FROM annonce INNER JOIN fruits ON annonce.NOM = fruits.fruit ORDER BY date_ajout ");
        foreach ($rep as $an) { ?>                              
                    <img src="<?php echo $an['image_fruit']?>" class="box-images"/>   <?php }?>                          
                    <div class="rectangle">
                        <a href="Echanger.php"> + de détails</a>
                    </div>
        </div>
     

        <div class="column-right">
            <h4 class="title-blocright">Ajouté le : <?php echo $liste['date_ajout']; ?></h4>
                <p class="description-offre">
                    <?php echo $liste['choix_produits']; ?></br>
                    <span><?php echo $liste['NOM']; ?> </span></br>
                    Poids : <?php echo $liste['pdsKg']; ?>Kg et <?php echo $liste['pdsG']; ?>
                    Prix : 5 €</br>
                    Lieu : <?php echo $liste['adresse']; ?>  </br>
                    commentaire du vendeur : <?php echo $liste['comment']; ?>
                       
                    <div class="rectangle1">
                        <a href="supprimer_annonce.php?id_annonce=<?php echo $liste['id_annonce'];?>"> Supprimer</a>
                    </div>   
                </p>   
        </div>  
    </div>
                    <?php } $reponse->closeCursor();?>
    </div>  <!-- fin du wrap -->

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
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