<?php
require_once('../model/DAO.class.php');
$pseudo = $_POST["Pseudo"];
$MDP = $_POST["MDP"];
$dao = new DAO();
// On regarde s'il y a un utilisateur correspondant a notre pseudo.
$query = $dao->db()->prepare("SELECT COUNT(login) FROM utilisateur WHERE login = :login");
$query->bindValue('login', $pseudo, PDO::PARAM_STR);
$query->execute();
$num_row = $query->fetchColumn();
// Si pas d'utilisateur on retourne au menu.
if ($num_row == 0){
    header("Location: ../controler/afficher_accueil.ctrl.php");
} else {
  $requete = "SELECT mp FROM utilisateur WHERE login='$pseudo'";
  $q = $dao->db()->query($requete);
  $mp = $q->fetch();

  if($MDP==$mp[0]){
    session_start();
    $_SESSION['pseudo'] = $pseudo;
    echo 'Vous êtes connecté !';
    header("Location: ../controler/afficher_accueil.ctrl.php");

  }else {
    echo "PROBLEME DE CONNEXION";
  }

}



?>
