<?php
session_start();
include("connexion_bdd.php");

if(isset($_POST['formconnexion']))
{
	$adresse_mailconnect=htmlspecialchars($_POST['adresse_mailconnect']);
	$mot_de_passeconnect = sha1($_POST['mot_de_passeconnect']);

	if(!empty($adresse_mailconnect) AND !empty($mot_de_passeconnect))
	{

		$requser = $bdd->prepare("SELECT * FROM utilisateurs WHERE adresse_mail=? AND mot_de_passe=?");
		$requser->execute(array($adresse_mailconnect, $mot_de_passeconnect));
		$userexist = $requser->rowCount();
		if($userexist == 1)
		{
			$userinfo = $requser->fetch();
			$_SESSION['dte_de_naissance'] = $userinfo['dte_de_naissance'];
			$_SESSION['admin'] = $userinfo['admin'];
			$_SESSION['pseudo'] = $userinfo['pseudo'];
			$_SESSION['id'] = $userinfo['id'];
			$_SESSION['adresse_mail'] = $userinfo['adresse_mail'];
			$_SESSION['adresse'] = $userinfo['adresse'];
			$_SESSION['num_tel'] = $userinfo['num_tel'];
			$_SESSION['mot_de_passe'] = sha1($_POST['mot_de_passeconnect']);

			
			header('Location: Accueil.php');
			//header("Location : profil.php?id=" . $_SESSION['id']);
			
			echo "bonjour : " . $userinfo['adresse_mail'] . $userinfo['id'] ;
		}
		else{

			header('Location: connexion.php?msg_connexion=Mot de passe incorrecte');
		}

	}
	else{
			header('Location: connexion.php?msg_connexion=Veuillez remplir tous les champs');
	}
}
if(isset($erreur)) {
	echo 'Erreur : '. $erreur;
}
?>
