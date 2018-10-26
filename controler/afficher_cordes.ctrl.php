<?php
session_start();

include_once("../model/DAO.class.php");

if (isset($_SESSION['pseudo'])){
$login = $_SESSION['pseudo'];
}

include('../view/header.view.php');

$cordes = $dao->getObjet('cordes');

include("../view/afficher_cordes.view.php");
include('../view/footer.view.php');

?>
