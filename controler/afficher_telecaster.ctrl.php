<?php
session_start();

include_once("../model/DAO.class.php");

if (isset($_SESSION['pseudo'])){
$login = $_SESSION['pseudo'];
}

include('../view/header.view.php');

$telecaster = $dao->getObjet('telecaster');
//$nb = $dao->getNbDoubleCut();


include("../view/afficher_telecaster.view.php");
include('../view/footer.view.php');

?>
