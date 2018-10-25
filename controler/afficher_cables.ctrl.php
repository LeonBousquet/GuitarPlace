<?php
session_start();

include_once("../model/DAO.class.php");

if (isset($_SESSION['pseudo'])){
$login = $_SESSION['pseudo'];
}

include('../view/header.view.php');

$cables = $dao->getObjet('cables');

include("../view/afficher_cables.view.php");

?>
