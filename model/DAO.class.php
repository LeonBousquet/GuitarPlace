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
          }
          catch (\Exception $e) {
            die("erreur de connexion : ".$e->getMessage());
          }
        }

        function db() {
          return $this->db;
        }

        function getObjet($base) : array {
          $req = "SELECT * FROM $base ";
          $sth = ($this->db)->query($req);
          $result=$sth->fetchAll(PDO::FETCH_CLASS, $base);
          return $result;
        }

        function getMesProduits($base) : array {
          $req = "SELECT * FROM $base WHERE id IN (SELECT id FROM mesproduits WHERE categorie= $base AND utilisateur_login = $login)";
          $sth = ($this->db)->query($req);
          $result=$sth->fetchAll(PDO::FETCH_CLASS, $base);
          return $result;
        }


        function getAccessoire($base) : array {
          $req = "SELECT * FROM $base ";
          $sth = ($this->db)->query($req);
          $result=$sth->fetchAll(PDO::FETCH_CLASS, $base);
          return $result;
        }




        /*
        function getNbDoubleCut() {
          $req = "SELECT COUNT (*) FROM doublecut";
          $sth = ($this->db)->query($req);
          $result=$sth->fetchAll(PDO::FETCH_CLASS,'doublecut');
          return $result[0];
          var_dump($result[0]);
        }
        */



}
$dao = new DAO();
?>
