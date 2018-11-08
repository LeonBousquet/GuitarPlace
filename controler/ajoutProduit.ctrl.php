<?php
session_start();

include_once("../model/DAO.class.php");


//$login enregistre le pseudo de l'utilisateur
$login = $_SESSION['pseudo'];

include('../view/header.view.php');

$categorie= $_GET['categorie'];
$id = $_GET['id'];

// appel de la fonction ajoutProduit qui va rajouter dans la table mesProduits
// la catégorie et l'id du produit sélectionné ainsi que le login de l'utilisateur

$dao->ajoutProduit($categorie,$id,$login);

// redirection automatique vers la page de produits sur laquelle se trouve l'utilisateur après ajout
header("Location:../controler/afficher_$categorie.ctrl.php");
include('../view/footer.view.php');
?>
