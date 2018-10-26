<?php
session_start();

require_once('../model/DAO.class.php');
if (isset($_SESSION['pseudo'])){
$login = $_SESSION['pseudo'];

}

include('../view/afficher_accueil.view.php');
include('../view/footer.view.php');

 ?>
