<?php
$pseudo = $_POST["Pseudo"];
$MDP = $_POST["MDP"];
$MDPverif = $_POST["MDPVerif"];


require_once('../model/DAO.class.php');
$dao = new DAO();

$req1= "SELECT count(*) FROM utilisateur WHERE login='$pseudo'";
$sth1 = ($dao->db())-> query($req1);
$nb = $sth1->fetch();
$count = $nb[0];

if ($MDP == $MDPverif && !empty($pseudo) && $count==0){

    $MDP=password_hash($MDP,PASSWORD_DEFAULT);

    $requete = "INSERT INTO utilisateur VALUES('$pseudo','$MDP')";

    $q = ($dao->db())->exec($requete);

    header("Location: ../view/connexion.view.php");
}

else if($MDP != $MDPverif) {
  header("Location: ../view/reinscription.view.php?pb=1");
}

else if(empty($pseudo)){
  header("Location: ../view/reinscription.view.php?pb=2");
}

else{
  header("Location: ../view/reinscription.view.php?pb=3");
}


include('../view/header.view.php');



 ?>
