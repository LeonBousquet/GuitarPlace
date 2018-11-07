<?php
session_start();

include_once("../model/DAO.class.php");

//$login enregistre le pseudo de l'utilisateur
$login = $_SESSION['pseudo'];

include('../view/header.view.php');

$categorie= $_GET['categorie'];
$id = $_GET['id'];

// appel de la fonction suppProduit qui va supprimer de la table mesProduits
// le produit associé à la catégorie, l'id ains que le login donnés en paramètre

$dao->suppProduit($categorie,$id,$login);

// redirection automatique vers la page de produits sur laquelle se trouve l'utilisateur
header("Location:../controler/afficher_mesproduits.ctrl.php");


?>
