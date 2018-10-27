<?php
session_start();

include_once("../model/DAO.class.php");

if (isset($_SESSION['pseudo'])){
$login = $_SESSION['pseudo'];
}

include('../view/header.view.php');

$categorie= $_GET['categorie'];
$id = $_GET['id'];

$dao->suppProduit($categorie,$id,$login);

header("Location:../controler/afficher_mesproduits.ctrl.php");


?>
