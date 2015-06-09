<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="css/inscription.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
			<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
    
<script type="text/javascript">
<!--
function verifPseudo(champ)
{
   if(champ.value.length < 2 || champ.value.length > 25)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifPass(champ)
{
   if(champ.value.length < 6 || champ.value.length > 255)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}


function verifForm(f)
{
   var pseudoOk = verifPseudo(f.pseudo);
   var mailOk = verifMail(f.adresse_mail);
   var pass1Ok = verifAge(f.password1);
   

   if(pseudoOk && mailOk && pass1Ok)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}

function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}

-->
</script>
    </head>
   

    <body>
<div class="site-container"> <!--Utile pour le responsive du header seulement-->
<div class="site-pusher"><!--Utile pour le responsive du header seulement-->

<?php include("header2-responsive.php"); ?>

<div class="site-content"><!--Utile pour le responsive du header seulement-->
   <div class="container"><!--Utile pour le responsive du header seulement-->

<div class="centrage">
		
			<section> 
				<h1> Créer votre compte ProxiPotage </h1>
                        <div style="color:red; font-family:arial; font-size:20px; text-align:center; background-color:white;">
      <?php 
      if (isset($_GET['msg1_inscription']))
      {
         echo $_GET['msg1_inscription'];     
      }

       if (isset($_GET['msg2_inscription']))
      {
         echo $_GET['msg2_inscription'];     
      }

       if (isset($_GET['msg3_inscription']))
      {
         echo $_GET['msg3_inscription'];     
      }

      ?></div>
				 <div id="zone-inscription">
					<form method ="post" action="traitement_inscription.php" onsubmit="return verifForm(this)">
						<div class="wrap">
							<div class="wrap2">
								<p>
							<input class="identite" type="text" name="pseudo" placeholder="Nom complet / Pseudo" onblur="verifPseudo(this)" required> 
							<input id="mail" type="email" name="adresse_mail" placeholder="Adresse Mail"  onblur="verifMail(this)" required> 
							<input id="password1" type="password" name= "password1" placeholder="Mot de passe (6 carractères minimum)" onblur="verifPass(this)" required> 
							<input id="password2" type="password" name= "password2" placeholder="Confirmation mot de passe"required>  
							<input type="checkbox"  id="conditions-utilisation"  name="connditions" required/> <label class="condition1" for="conditions-utilisation" required>J'accepte les <a href="mention_legal.php" class="condition">Condition d'utilisation et les Règles de confidentialitées</a> de ProxiPotage </label>
							<input name="envoyer" class="bouton_inscrire" type="submit" value="Valider" /></br>
							</p>
						</div>
					</div>
					</form>
				</div>
			</section>
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