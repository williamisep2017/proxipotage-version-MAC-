<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable-x=no" />
        <title>Proxipotage</title>
        <link rel = "stylesheet" href="css/APropos.css" />
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
         

         <div class="wrap-apropos">
            <section class="partie1">
                 <h1>Qui sommes nous ?</h1>
                 <p class="explain">Proxipotage est un site internet d'Achat, d'échange et de vente de fruits et légumes entre particulier.
                     Vous avez un potagé chez vous et souhaitez vendre ou échanger votre récolte avec d'autre particulier autour de vous,   Proxipotage est là pour vous.          
                 </p>
             </section>

            <h1>Comment ça marche ?</h1>
            
            <section class="partie2">
                <div class="all-horloge">
                    <div class="horloge"> 1</div><br/>
                        <h4>Trouver une offre</h4>
                </div>
                <div class="all-horloge">
                    <div class="horloge"> 2</div><br/>
                        <h4>Contacter le vendeur</h4>
                </div>
                <div class="all-horloge">
                    <div class="horloge"> 3</div><br/>
                        <h4>Récuperer le produit en main propre</h4>
                </div>
                             </section>
                             
            <p class="explain">Pour trouver une offres, Vous pouvez parcourir les dernières offres en ligne dans la page d'accueil. 
                Vous pouvez aussi trouver toutes les offres dans l'onglet “Les offres“. 
                Ou encore faire une recherche de fruits ou légumes dans la barre de recherche.<br/>
                Une fois l'offre sélectionné, contacter le vendeur en cliquant sur “contacter le vendeur“, 
                préciser dans le cas d'un échange le ou les produits d'échange.<br/>
                Récuperer et payer le bien à l'endroit convenu lors de votre contact.
            </p>
                <br/>
                <br/>
             <h1>Comment déposer une annonce ?</h2>
          <section class="partie2">
                <p class="explain">
                    Pour déposer une annonce vous devez au préalapble être inscrit et connecter sur le site.
                    Ensuite dirigiez-vous dans la page “déposer une annonce“ et remplissez les champs demandés.<br/> 
                    Le dépot d'annonce est simple et rapide, vous n'avez qu'a remplir quelque champs et le site associra automatiquement 
                    une image correspondant au fruits ou légumes sélectionner. Préciser un prix, une adresse de localisation, valider, et hop
                    l'annonce est en ligne.
                </p>
            </section>
             <br/>
             <br/>
             <br/>
             <br/>
                <section class="partie3">
             <h3>Pour plus d'information consulter notre rubrique Aide en cliquant <a href="Aide_final2.php">ici</a></h3>
             <br/>
             <h3>Retour à la page d'<a href="Accueil.php">accueil</a></h3>
                </section>
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