<?php
session_start();

include_once("../model/DAO.class.php");

if (isset($_SESSION['pseudo'])){
$login = $_SESSION['pseudo'];
}

include('../view/header.view.php');

if(isset($_GET['id'])){
      $id=$_GET['id'];
      $acoustique=$dao->getNObjet('acoustique',$id,6);
}else {
      $_GET['id'] = 1;
      $acoustique=$dao->getNObjet('acoustique',1,6);
}

$next = $_GET['id'] + 6;
$test = $dao->getNObjet('acoustique',$next,6);
if (count($test) == 0) {
  $next = $_GET['id'];
}

$prec = $_GET['id'] - 6;

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
