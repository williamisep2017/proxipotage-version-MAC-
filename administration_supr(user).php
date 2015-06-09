<?php
session_start();
include("connexion_bdd.php"); 
?>

   <?php $bdd->query("DELETE FROM utilisateurs WHERE id='".$_GET['id']."'");
   include("administration_user.php");

  
?>