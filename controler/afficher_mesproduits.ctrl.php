<?php
session_start();

require_once('../model/DAO.class.php');


if (isset($_SESSION['pseudo'])){
$login = $_SESSION['pseudo'];
}

include('../view/header.view.php');

$mesproduitsAcoustiques = $dao->getMesProduits('acoustique');
//...

include("../view/afficher_acoustique.view.php");
//include les autres
include('../view/footer.view.php');

?>

 ?>
