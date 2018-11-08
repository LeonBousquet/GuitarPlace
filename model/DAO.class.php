<?php
ini_set('display_errors', 'on');

require_once('stratocaster.class.php');
require_once('telecaster.class.php');
require_once('singlecut.class.php');
require_once('doublecut.class.php');
require_once('acoustique.class.php');
require_once('cordes.class.php');
require_once('cables.class.php');
require_once('mediators.class.php');
require_once('mesproduits.class.php');


$dao = new DAO();

    // Le Data Access Object
    // Il représente la base de donnée
    class DAO {
        // L'objet local PDO de la base de donnée
        private $db;

        // Constructeur chargé d'ouvrir la BD
        function __construct() {
          $database = 'sqlite:../data/donnees.db';
          try {
            $this->db = new PDO($database);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          }
          catch (\Exception $e) {
            die("erreur de connexion : ".$e->getMessage());
          }
        }

        function db() {
          return $this->db;
        }

        // retourne tous les produits de la classe $base pour l'utilisateur ayant le pseudo $login
        function getMesProduits($base,$login) : array {
          $req = "SELECT * FROM $base WHERE id in (SELECT id FROM mesproduits WHERE categorie= '$base' AND utilisateur_login='$login')";
          $sth = ($this->db)->query($req);
          $result=$sth->fetchAll(PDO::FETCH_CLASS, $base);
          return $result;
        }

        // Ajoute un produit dans la table mesproduits en spécifiant la catégorie et l'id du produit ainsi que le pseudo de l'utilisateur
        function ajoutProduit($categorie,$id,$login){
            $test = "SELECT * FROM mesproduits WHERE categorie = '$categorie' and id = '$id' and utilisateur_login = '$login'"; //on fait cela pour ensuite vérifier que le produit sélectionné n'existe pas déjà dans la table mesproduits pour l'utilisateur donné
            $sth = ($this->db)->query($test);
            $result=$sth->fetchAll(PDO::FETCH_CLASS, 'mesproduits');
            if (count($result) == 0) { //Si ce produit n'a pas déjà été ajouté dans mes produits
              $req = "INSERT INTO mesproduits (categorie,id,utilisateur_login) VALUES ('$categorie','$id','$login')"; //On l'ajoute dans la table mesProduits
              $sth = ($this->db)->query($req);
            }
        }

        // Supprime le produit de catégorie $catégorie et d'id $id pour l'utilisateur de pseudo $login de la table mesproduits
        function suppProduit($categorie,$id,$login){
            $req = "DELETE FROM mesproduits WHERE categorie= '$categorie' AND id= '$id' AND utilisateur_login='$login'";
            $sth = ($this->db)->query($req);
        }

        // Acces aux n objets à partir de l'id $id
        // Cette méthode retourne un tableau contenant n objets de la table $base.
        function getNObjet($base, $id, $n) {
          $requete = "SELECT * FROM $base where id>=$id order by id limit $n";
          $query=($this->db)->query($requete);
          $result =$query->fetchAll(PDO::FETCH_CLASS,"$base");
          return $result;
        }

}

$dao = new DAO();

?>
