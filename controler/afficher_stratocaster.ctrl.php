<?php
session_start();

include_once("../model/DAO.class.php");

if (isset($_SESSION['pseudo'])){
$login = $_SESSION['pseudo'];
}

include('../view/header.view.php');

$stratocaster = $dao->getObjet('stratocaster');

include("../view/afficher_stratocaster.view.php");
include('../view/footer.view.php');

?>
