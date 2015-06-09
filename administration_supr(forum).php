<?php
session_start();
include("connexion_bdd.php"); 
?>

   <?php $bdd->query("DELETE FROM sujet WHERE id_sujet='".$_GET['id_sujet']."'");
   include("administration_forum.php");

  
?>