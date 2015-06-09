<footer>

            <div class="tabcenter-footer">
                <tr>
                    <div class="col-footer"> <h3 class="col-footer__title">Plan du site</h3><br/>
                            <a href="accueil.php" class="footer-txt">Accueil</a><br/>
                            <a href="Apropos.php" class="footer-txt">Qui sommes-nous ?</a><br/>
                            <a href="Lesoffres.php" class="footer-txt">Les offres</a><br/>
                            <a href="depot_offre.php" class="footer-txt">Déposer une offre</a><br/>
                            <a href="index.php" class="footer-txt">Forum</a><br/>
                            <a href="Aide.php" class="footer-txt">Aide</a><br/>
                           
                        
                            <?php                       

                           
                            if ($_SESSION['admin']==1){
                              ?> <a href="administration_annonce.php" class="footer-txt" style="color:red;">Interface administrateur</a>
                              <?php }
                                ?>
                    </div>

                    <div class="col-footer"> <h3 class="col-footer__title">Qui sommes-nous?</h3><br/>
                        <p class="qui-sommes-nous"> ProxiPotage : Achat, vente, échange de fruits et légumes entre particulier
                Avec Proxipotage acheter, échanger ou vendez des fruits et légumes fraichement rammassés. 
                Que ça soit votre propre culture ou celle d'un autre, profiter d'internet pour acheter, échanger ou vendre
                des produits sains.</p>

                    </div>
                    <div class="col-footer"><h3 class="col-footer__title">Nous contacter</h3><br/>
                        service-client@Proxipotage.fr


                    </div>
                </tr>
            </div>
            
            
            <div class="follow-us">
                <a href="#"><img class="logo_follow-us" src="css/images/facebook-logo.png" alt= "logo facebook"></a>
                <a href="#"><img class="logo_follow-us" src="css/images/twiter-logo.png" alt= "logo twiter"></a>
                <a href="#"><img class="logo_follow-us" src="css/images/fluxrss-logo.png" alt= "logo flux rss"></a>
            </div>
</footer>
     

    </body>
</html>
