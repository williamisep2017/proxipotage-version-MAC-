<?php 
session_start();
//Connection au serveur de base de donnée
include("connexion_bdd.php");

// Vérification de la validité des informations
if(isset($_POST['envoyer'])) {
	if(isset($_POST['pseudo']) AND !empty($_POST['pseudo'])
		AND isset($_POST['adresse_mail']) AND !empty($_POST['adresse_mail'])
		AND isset($_POST['password1']) AND !empty($_POST['password1'])
		AND isset($_POST['password2']) AND !empty($_POST['password2']))
	
	{
		//Tous les champs sont remplis
		$pseudo=mysql_real_escape_string($_POST['pseudo']);
		$mail=mysql_real_escape_string($_POST['adresse_mail']);
		$password1=mysql_real_escape_string($_POST['password1']);
		$password2=mysql_real_escape_string($_POST['password2']);

		// Hachage du mot de passe
		$pass_hache = sha1($_POST['password1']);
		
		$longueur_pseudo = strlen($pseudo);

		if($longueur_pseudo >3 and $longueur_pseudo <=30)
		{
		//le pseudo respect le format
		if($password1 == $password2)
		{
		//les mots de passe sont identique
		$req = $bdd->prepare('INSERT INTO utilisateurs(pseudo, mot_de_passe, adresse_mail) VALUES(:pseudo, :mot_de_passe, :adresse_mail)');
		$req->execute(array(
   			 	'pseudo' => $pseudo,
    			'mot_de_passe' => $pass_hache,
    			'adresse_mail' => $mail));
		header('Location: connexion.php?msg4_inscription=votre inscription a été prise en compte');
		}

		else {
			header('Location: inscription.php?msg1_inscription=Les mots de passe ne correspondent pas');
		}
		}
		else{
		header('Location: inscription.php?msg2_inscription= pseudo : entre 3 à 30 caractères');
		}
		}
		else{
		header('Location: inscription.php?msg3_inscription=veuillez remplir tous les champs');
		}
		}
	?>

<?php
if(isset($erreur)) {
	echo 'Erreur : '. $erreur;
}
?>






