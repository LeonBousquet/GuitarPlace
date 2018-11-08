<?php
session_start();

include_once("../model/DAO.class.php");

if (isset($_SESSION['pseudo'])){
$login = $_SESSION['pseudo'];
}

include('../view/header.view.php');

if(isset($_GET['id'])){
      $id=$_GET['id'];
      $acoustique=$dao->getNObjet('acoustique',$id,6); //Retourne un tableau de 6 objets acoustique à partir de id
}else {
      $_GET['id'] = 1;
      $acoustique=$dao->getNObjet('acoustique',1,6);   //Retourne un tableau de 6 objets acoustique à partir de 1
}

$next = $_GET['id'] + 6; //next = id + 6 (6 objets suivant)
$test = $dao->getNObjet('acoustique',$next,6);
if (count($test) == 0) { //Si getNObjet des 6 objets suivant retourne un tableau vide
  $next = $_GET['id'];   //Alors next = id
}

$prec = $_GET['id'] - 6; //prec = id - 6 (6 objets précédent)

if (isset($_GET['page'])) {
  $page = $_GET['page'];
}
else {
  $_GET['page'] = 1;
  $page = 1;
}

$nextPage = $_GET['page'] + 1;
$precPage = $_GET['page'] - 1;

include("../view/afficher_acoustique.view.php");
include('../view/footer.view.php');

?>
