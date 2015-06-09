<?php 
include("connexion_bdd.php");
if(isset($_POST['envoyer'])) {
  
    if(isset($_POST['contenu']) AND !empty($_POST['contenu']))
    {
        $contenu=($_POST['contenu']);
        $id_sujet= $_POST["id_sujet"];

        $req = $bdd->prepare('INSERT INTO comm(contenu,id_sujet) VALUES(:contenu,:id_sujet)');
        $req->execute(array(
                'contenu' => $contenu,
                'id_sujet' => $id_sujet));
                header("location: forum.php?categorie=Voir%20les%20sujets");
        }

        else{
        $erreur="La longueur du commentaire n'a pas la bonne taille (minimum 3 et maximum 30)" ;
        }

        }

    ?>

<!DOCTYPE html>

                                                                <html>
                                                                 <head>
                                                                        <meta charset="utf-8" />
                                                                       <meta name="viewport" content="width=device-width; initial-scale=1; user-scalable=0"/>
                                                                      <title>Proxipotage</title>
                                                                      <link rel = "stylesheet" href="css/reponse.css" />
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
    


<div class="wrap_comm">  <!-- J'INSTAURE MA CLASSE WRAP_COMM-->
    

        <div align="center" class="title">
        <h1>Forum - Commenter le sujet suivant</h1>  <!-- HEADER VERT-->
        </div>


<!--<div class="cadre"><p> <div class="sujet"><strong> <?= $affichage['contenu']; ?> <strong></br> </div> </div> -->





<?php
if(isset($erreur)) {
    echo 'Erreur : '. $erreur;
}
?>


        <form method="post" action="reponse.php">  <!-- -->
            <p>

 
                <textarea class="contenu" name="contenu" placeholder="votre commentaire"> </textarea> </br>
                <input type="hidden" name="id_sujet" value="<?php echo $_GET["id_sujet"]; ?>">
                <input class="bouton_envoie" type="submit" name="envoyer" value="Ajouter à la discussion">




            </p>
            <p><a href="Accueil.php">Retour à la page d'accueil</a> </p>
            <p><a href="forum.php?categorie=Voir%20les%20sujets">Retour au forum</a> </p>
        </form>






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