
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width; initial-scale=1; user-scalable=0"/>
        <title>Proxipotage</title>
                <link rel = "stylesheet" href="css/addPost.css" />
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




<div class="wrap_add">
   		 <?php include("connexion_bdd.php"); 
            /* include("header1-responsive.php"); */

//VERIFICATION VALIDITE INFORMATION         
    if(isset($_POST['envoyer'])) {
  
    if(isset($_POST['name']) AND !empty($_POST['name'])
    AND isset($_POST['contenu']) AND !empty($_POST['contenu']))
    {
    
        $name=($_POST['name']);
        $contenu=($_POST['contenu']);

       $longueur_name = strlen($name);

//LE NAME RESPECTE LE FORMAT

        $req = $bdd->prepare('INSERT INTO sujet(name, contenu) VALUES(:name, :contenu)');
        $req->execute(array(
                'name' => $name,
                'contenu' => $contenu));
        echo 'Votre commentaire a été pris en compte';
        

        }
        else{
        $erreur="La longueur du sujet n'a pas la bonne taille (minimum 3 et maximum 30)" ;
        }
        }
       /* else{
        $erreur='Tous les champs sont obligatoire.';
        } */
        
    ?>

<?php
if(isset($erreur)) {
    echo 'Erreur : '. $erreur;
}
?>
 <div class="title">
    <h1>Ajouter un sujet</h1>
    </div>

    <div class="forum">

        <form method="post" action="addPost.php">
            <p>
               <!-- <input type="radio" name="categorie" value="0" /><label> Fruits </label>
                <input type="radio" name="categorie" value="1" /><label> Legumes </label> -->
                <input type="text" name="name" placeholder="Nom du sujet..." required/> </br>
                <textarea class="contenu" name="contenu" placeholder="votre contenu du sujet"> </textarea> </br>
                <input class="bouton_envoie" type="submit" name="envoyer" value="Ajouter le sujet">



                <?php 
                if(isset($erreur)){
                    echo $erreur;
                }
                ?>
            </p>
            <p><a href="Accueil.php">Retour à la page d'accueil</a> </p>
            <p><a href="forum.php?categorie=Voir%20les%20sujets">Retour aux sujets</a> </p>
        </form>

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
