<?php
session_start();
include("connexion_bdd.php"); 
?>

   <?php $bdd->query("DELETE FROM comm WHERE id_comm='".$_GET['id_comm']."'");
   include("administration_forum2.php");

  
?>