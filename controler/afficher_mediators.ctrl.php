<?php
session_start();

include_once("../model/DAO.class.php");

if (isset($_SESSION['pseudo'])){
$login = $_SESSION['pseudo'];
}

include('../view/header.view.php');

$mediators = $dao->getObjet('mediators');

include("../view/afficher_mediators.view.php");
include('../view/footer.view.php');

?>
