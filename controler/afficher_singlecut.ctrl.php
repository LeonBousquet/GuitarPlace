<?php
session_start();

include_once("../model/DAO.class.php");

if (isset($_SESSION['pseudo'])){
$login = $_SESSION['pseudo'];
}

include('../view/header.view.php');

$singlecut = $dao->getObjet('singlecut');

include("../view/afficher_singlecut.view.php");

?>
