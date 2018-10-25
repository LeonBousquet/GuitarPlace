<?php
$pseudo = $_POST["Pseudo"];
$MDP = $_POST["MDP"];
$MDPverif = $_POST["MDPVerif"];

require_once('../model/DAO.class.php');
$dao = new DAO();
if ($MDP == $MDPverif){
  $requete = "INSERT INTO utilisateur VALUES('$pseudo','$MDP')";

  $q = ($dao->db())->exec($requete);
}

header("Location: ../view/connexion.view.php");

 ?>
