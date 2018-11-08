<?php
session_start();

require_once('../model/DAO.class.php');


if (isset($_SESSION['pseudo'])){
$login = $_SESSION['pseudo'];
}

include('../view/header.view.php');

  //on récupère les produits pour chaque cattégorie que l'utilisateur a sélectionné en faisant appel
  //à la fonction getMesProduits en spécifiant la catégorie et le login de l'utilisateur dans le fichier DAO.class.php. Pour chaque catégorie on les stocks dans une variable précise
  // C'est ensuite dans la vue que l'on s'occupera de parcourir les tableaux pour afficher les différentes caractéristiques ainsi que la photo du produit

      $mesproduitsAcoustiques = $dao->getMesProduits('acoustique',$login);
      $mesproduitsStratocaster = $dao->getMesProduits('stratocaster',$login);
      $mesproduitsTelecaster = $dao->getMesProduits('telecaster',$login);
      $mesproduitsSingleCut = $dao->getMesProduits('singlecut',$login);
      $mesproduitsDoubleCut = $dao->getMesProduits('doublecut',$login);
      $mesproduitsmediator = $dao->getMesProduits('mediators',$login);
      $mesproduitscables = $dao->getMesProduits('cables',$login);
      $mesproduitscordes = $dao->getMesProduits('cordes',$login);


include("../view/afficher_mesproduits.view.php");

?>
