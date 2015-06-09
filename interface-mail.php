<?php session_start();?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width; initial-scale=1; user-scalable=0"/>
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="css/interface-mail.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
			<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
    </head>

<a href="Accueil.php" >
		<img src="css/images/LogoPPblacknom2.png" class="header-logo"/>
	</a>

<body>

<section>
	<div class="zone-envoi">
		</br> 
		<div class="wrap-mail">
<div align=center>
<?php $id_annonce = $_GET['annonce']; ?>
<?php include("connexion_bdd.php"); ?>


			<?php
				$reponse = $bdd->query("SELECT * FROM annonce WHERE id_annonce='$id_annonce'");
				
				$donnees = $reponse->fetch()
			?>
			<?php 
			$reponse->closeCursor();
			?>

			</div>
			<?php
				$reponse = $bdd->query("SELECT * FROM utilisateurs Inner Join annonce ON annonce.userid = utilisateurs.id WHERE annonce.id_annonce='$id_annonce'");
				?><div class="sous-title"> <?php echo '<h2>Informations vendeur :</h2>'; ?></div><?php
				$donnees = $reponse->fetch()
			?>
						<p>
							Email : &nbsp <strong><?php echo $donnees['adresse_mail']; ?></br> </strong>
							Pseudo : &nbsp <strong><?php echo $donnees['pseudo']; ?></br> </strong>
							Option choix vente : <strong><?php echo $donnees['choix_vente']; ?></br> </strong>
							<!--Adresse de vente:<strong><?php  $donnees['adresse']; ?></br> </strong> -->
						</p>

										<p class="info"> L'envoi du mail vous permettra de prendre contact avec le vendeur. <br/>
											Si vous souhaitez proposez un échange, précisez le ou les produits proposé en échange. <br/>
										 </p>
			<?php 
			$reponse->closeCursor();
			?>
			
			<?php ?>	

			<form method="POST"> <!--action="traitement_contacter.php"> -->
				<textarea class = "commentaire"name="content_mail"></textarea><br/>
				<input class="bouton_envoie" type="submit" name="bouton_envoie" color="blue" value="Envoyer mail"> 
			</form>
			
				<p><a href="Accueil.php">Retour à la page d'accueil</a> </p>


				</div>
			</section> 	

<?php 

require_once('class.phpmailer.php');
require_once('class.SMTP.php');
require_once('connexion_bdd.php');

if (isset($_POST['content_mail']) and !empty($_POST['content_mail'])){

$mail = new PHPMailer();
$msg=$_POST['content_mail'];
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "proxipotage@gmail.com";
$mail->Password = "proxipotage2015";
$mail->CharSet = "utf-8";
$mail->SetFrom('proxipotage@gmail.com', $_SESSION['adresse_mail']);
$mail->AddReplyTo($_SESSION['adresse_mail']);
$mail->Subject = 'Réponse à votre annonce'; ?> </br> <?php
$mail->Body = $msg;
$mail->AddAddress($donnees['adresse_mail']);



if ( !$mail->Send() ) {
  echo "Echec de l'envoi du mail, Erreur: " . $mail->ErrorInfo;
} else {
   ?> <div align="center"><h1 class="ok"><strong><?php echo "Message envoyé!"; ?></strong> </h1> </div> <?php
}
}
unset($mail);

?>

</div>

</body>		
</html>