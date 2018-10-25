<?php
session_start();

include_once("../model/DAO.class.php");

if (isset($_SESSION['pseudo'])){
$login = $_SESSION['pseudo'];
}

include('../view/header.view.php');

$acoustique = $dao->getObjet('acoustique');


include("../view/afficher_acoustique.view.php");
include('../view/footer.view.php');

?>
