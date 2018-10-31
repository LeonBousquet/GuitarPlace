<?php
session_start();

include_once("../model/DAO.class.php");

if (isset($_SESSION['pseudo'])){
$login = $_SESSION['pseudo'];
}

include('../view/header.view.php');

if(isset($_GET['id'])){
      $id=$_GET['id'];
      $mediators=$dao->getNObjet('mediators',$id,6);
}else {
      $_GET['id'] = 1;
      $mediators=$dao->getNObjet('mediators',1,6);
}

$next = $_GET['id'] + 6;
$test = $dao->getNObjet('mediators',$next,6);
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

include("../view/afficher_mediators.view.php");
include('../view/footer.view.php');

?>
