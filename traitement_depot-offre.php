<html>
    <head>
        <meta charset="utf-8" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="css/traitement_depot-offre.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
			<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
    </head>

    <body>


<div class="wrap">

		<div class ="title">
			<h1>Récapitulatif de l'annonce</h1>
		</div>

			<div class="sous-title">
				<h2>Information sur le produit</h2>
			</div>

	<div class="content">
		<table>

		<tr>
			<td> <h3>types de vente :</h3></td>
			<td><?php echo htmlspecialchars($_POST['choix_vente']); ?></td>
		</tr>

		<tr>
			<td>
				<h3>types de produits: </h3>
			</td>
			<td><?php echo htmlspecialchars($_POST['choix_produits']); ?>
			</td>
		</tr>

		<tr>
			<td><h3>Nom du produit :</h3></td>	
			<td><?php echo htmlspecialchars($_POST['NOM']); ?></td>
		</tr>

		

		<tr>
			<td><h3>poids du produit :</h3></td>
			<td><?php echo htmlspecialchars($_POST['pdsKg']); ?> killogrames et <?php echo htmlspecialchars($_POST['pdsG']); ?>Grammes.</td>
		</tr>

		<tr>
			<td><h3>Quantité:</h3> 	</td>
			<td><?php echo htmlspecialchars($_POST['qte']); ?></td>
			</tr>


	</table>
	</div>




<!--//////////////////////////////////////////////////
/////////   Information Personnelle   ////////
//////////////////////////////////////////////////////-->

				<div class ="title2">
					<h1>Informations personnelles</h1>
				</div>
					<section class="Identite">
						<div class="Identite-left">
							<h3>Localisation</h3>
						</div>
							<div class="Identite-right">
								<h3>Profil</h3>
							</div>
					</section>

<!--///////////////////////////
/////////    VALIDER   ////////
///////////////////////////////-->

		<div class="bouton">
			<form action="traitement_depot-offre2.php" method="post">
				<p>
				<input class="submit2" type="reset" value="< Précedent " />
				<input name="blabla" class="submit1" type="submit" value="Valider >" />
				
			</p>
			</form>
		
		</div>

</div>



	</body>