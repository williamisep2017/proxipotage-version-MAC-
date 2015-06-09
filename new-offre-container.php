<div class="wrap-new">
    <div class="column-new">
    				
    	<?php include("connexion_bdd.php");

			$annonce = $bdd->query("SELECT * FROM annonce INNER JOIN fruits ON annonce.NOM = fruits.fruit ORDER BY date_ajout DESC LIMIT 12");
			$annonce = $annonce->fetchAll();
			foreach ($annonce as $produits) {
				$_SESSION['id_annonce']=$produits['id_annonce'];?>
					
				<?php echo'<a href="detail-offre.php?annonce='.$produits['id_annonce'].'">'; ?>  
						
					<div class="box-new" style="background-image: url(<?php echo $produits['image_fruit']?>);">
						<div class="paragraph_white-text">
							<?php echo $produits['fruit']?><br/> 
							Prix: <?php echo $produits['prix']?>€<br/> 
							poids: <?php echo $produits['pdsKg']?>kg<?php echo $produits['pdsG']?>g<br/>			
						</div>
					</div> 
					
					<?php '</a>'; ?>
					<?php } ?>
    </div>
</div>
