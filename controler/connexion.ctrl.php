<?php
require_once('../model/DAO.class.php');

// récupération du pseudo et du mot de passe (par la méthode POST) que l'utilisateur a rentré
// dans le formulaire de connexion

$pseudo = $_POST["Pseudo"];
$MDP = $_POST["MDP"];
$dao = new DAO();
// On regarde s'il y a un utilisateur correspondant a notre pseudo.
$query = $dao->db()->prepare("SELECT COUNT(login) FROM utilisateur WHERE login = :login");
$query->bindValue('login', $pseudo, PDO::PARAM_STR);
$query->execute();
$num_row = $query->fetchColumn();
// Si pas d'utilisateur on redemande une connexion en spécifiant la variable pb égale à 1 dans l'adresse
// pour afficher un message à l'utilisateur l'informant pourquoi il doit réessayer (voir la view).
if ($num_row == 0){
    header("Location: ../view/connexion.view.php?pb=1");
} else {
  //sinon on récupère dans notre table utilisateur le mdp correspondant au pseudo rentré
  $requete = "SELECT mp FROM utilisateur WHERE login='$pseudo'";
  $q = $dao->db()->query($requete);
  $mp = $q->fetch();

  //étant donné que les mots de passe sont hachés avant d'être stockés pour des raison de sécurité, on utilise
  // la fonction password_verify pour comparer les hash et s'assurer que le mot de passe rentré est le bson_decode

  // on s'assure de même que le champs pseudo n'est pas vide

  //si tout est bon on lance la connexion et on ouvre une session pour l'utilisateur

    if(password_verify($MDP,$mp[0]) && !empty($_POST["Pseudo"])){
      session_start();
      $_SESSION['pseudo'] = $pseudo;
      header("Location: ../controler/afficher_accueil.ctrl.php");

    }else {

      //sinon on fait appel de nouveau à la page de connexion en spécifiant notre variable pb = 1 pour afficher
      // le message explicatif à l'utilisateur
        header("Location: ../view/connexion.view.php?pb=1");
    }

}



?>
