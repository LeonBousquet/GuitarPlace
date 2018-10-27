<?php
session_start();

require_once('../model/DAO.class.php');


if (isset($_SESSION['pseudo'])){
$login = $_SESSION['pseudo'];
}

include('../view/header.view.php');

$mesproduitsAcoustiques = $dao->getMesProduits('acoustique',$login);
$mesproduitsStratocaster = $dao->getMesProduits('stratocaster',$login);
$mesproduitsTelecaster = $dao->getMesProduits('telecaster',$login);
$mesproduitsSingleCut = $dao->getMesProduits('singlecut',$login);
$mesproduitsDoubleCut = $dao->getMesProduits('doublecut',$login);
$mesproduitsmediator = $dao->getMesProduits('mediators',$login);
$mesproduitscables = $dao->getMesProduits('cables',$login);
$mesproduitscordes = $dao->getMesProduits('cordes',$login);

include("../view/afficher_mesproduits.view.php");

?>
