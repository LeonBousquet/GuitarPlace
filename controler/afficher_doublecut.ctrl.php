<?php
session_start();

include_once("../model/DAO.class.php");

if (isset($_SESSION['pseudo'])){
$login = $_SESSION['pseudo'];
}

include('../view/header.view.php');

$doublecut = $dao->getObjet('doublecut');
//$nb = $dao->getNbDoubleCut();


include("../view/afficher_doublecut.view.php");
include('../view/footer.view.php');

?>
