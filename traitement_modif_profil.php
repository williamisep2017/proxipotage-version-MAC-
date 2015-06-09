<?php 
session_start();
//Connection au serveur de base de donnée
include("connexion_bdd.php");

//if(isset($_SESSION['id'])) {
	if(isset($_POST['pseudo']) AND !empty($_POST['pseudo'])
		AND isset($_POST['dte_de_naissance']) AND !empty($_POST['dte_de_naissance'])
		AND isset($_POST['adresse']) AND !empty($_POST['adresse'])
		AND isset($_POST['num_tel']) AND !empty($_POST['num_tel'])
		AND isset($_POST['adresse_mail']) AND !empty($_POST['adresse_mail'])		
		AND isset($_POST['password1']) AND !empty($_POST['password1'])
		AND isset($_POST['password2']) AND !empty($_POST['password2']))
	{
		
		$pseudo_user=$_POST['pseudo'];
		$dte=$_POST['dte_de_naissance'];
		$loc=$_POST['adresse'];
		$num=$_POST['num_tel'];
		$email=$_POST['adresse_mail'];
		$password1=$_POST['password1'];
		$password2=$_POST['password2'];

		// Hachage du mot de passe
		$pass_hache = sha1($_POST['password1']);
		
		$longueur_pseudo = strlen($pseudo_user);

		if($longueur_pseudo >3 and $longueur_pseudo <=30)
		{
		//le pseudo respect le format
				if($password1 == $password2)
				{
		//les mots de passe sont identique
				
						$req = $bdd->prepare("UPDATE utilisateurs SET dte_de_naissance= :dte, adresse= :loc, num_tel= :num, adresse_mail= :email, mot_de_passe= :pass1 WHERE id= '".$_SESSION['id']."'");
						$req->execute(array(
							'dte' =>$dte,
							'loc' =>$loc,
							'num' =>$num,
							'email' =>$email,
							'pass1' =>$pass_hache));

						

		
			$userinfo = $bdd->query("SELECT * FROM utilisateurs WHERE id= '".$_SESSION['id']."'");
			$resultat = $userinfo->fetch();

			$_SESSION['dte_de_naissance'] = $resultat['dte_de_naissance'];
			$_SESSION['pseudo'] = $resultat['pseudo'];
			$_SESSION['adresse_mail'] = $resultat['adresse_mail'];
			$_SESSION['adresse'] = $resultat['adresse'];
			$_SESSION['num_tel'] = $resultat['num_tel'];

			header('Location: modification_profil.php?msg_modif=Modification terminée');									
    			}
        		
				else {
				header('Location: modification_profil.php?msg1_modif=Les mot de passe de confirmation ne correspondent pas');
				}
				}
		else{
		$erreur="La longueur du Pseudo ou Nom complé n'a pas la bonne taille (minimum 3 et maximum 30)" ;
		}
		}		
				
	else{
	$erreur='Veuillez remplir tous les champs.';
	}
			

?>
<?php
if(isset($erreur)) {
	echo 'Erreur : '. $erreur;
}
?>