<?php

// récupération du pseudo, du mot de passe et de la confirmation du mot de passe (par la méthode POST) que l'utilisateur a rentré
// dans le formulaire d'inscription

$pseudo = $_POST["Pseudo"];
$MDP = $_POST["MDP"];
$MDPverif = $_POST["MDPVerif"];


require_once('../model/DAO.class.php');
$dao = new DAO();

//on récupère le nombre de résultats qui correspondent au pseudo rentré par l'utilisateur
// cela est utile pour vérifier la contrainte d'unicité du pseudo dans la base de données et ainsi éviter des dysfonctionnements
$req1= "SELECT count(*) FROM utilisateur WHERE login='$pseudo'";
$sth1 = ($dao->db())-> query($req1);
$nb = $sth1->fetch();
$count = $nb[0];

//on vérifie que le mot de passe rentré et sa confirmation sont identiques, que le champ pseudo n'est pas vide
// et que le pseudo n'existe pas déjà ($count==0)

if ($MDP == $MDPverif && !empty($pseudo) && $count==0){

    //le mot de passe est hashé avant d'être stocké dans la base de données pour des raisons de sécurité

    $MDP=password_hash($MDP,PASSWORD_DEFAULT);

    $requete = "INSERT INTO utilisateur VALUES('$pseudo','$MDP')";

    $q = ($dao->db())->exec($requete);

    //tout s'est passé comme prévu, on appelle donc la page de connexion pour que le nouvel utilisateur se connecte
    header("Location: ../view/connexion.view.php?pb=0");
}
// si le mot de passe et sa confirmation sont différents, on rappelle la page d'inscription en spécifiant dans l'url
// la variable pb = 1  pour afficher le message adéquat
else if($MDP != $MDPverif) {
  header("Location: ../view/inscription.view.php?pb=1");
}
// même chose si le champ pseudo est vide avec pb = 2
else if(empty($pseudo)){
  header("Location: ../view/inscription.view.php?pb=2");
}
// même chose si le pseudo existe déjà avec pb = 3
else{
  header("Location: ../view/inscription.view.php?pb=3");
}

 ?>
