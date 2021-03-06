<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>GuitarPlace</title>
  <link rel="stylesheet" type="text/css" href="../view/design/accueil.css">
  <style media="screen">
    </style>
  </head>
  <body>
    <img src="../data/header.jpg" alt="Header" id="header">

    <?php include("../view/header.view.php"); ?> 

    <br>

    <h2>
      Bonjour cher guitariste et bienvenue chez <big>GuitarPlace</big>,<br>
      votre site de guitare préféré.<br>
      Vous trouverez ici toutes les guitares éléctriques, acoustiques, ainsi qu'une multitude d'accessoires.<br><br>
      Vous aimez un article ? Connectez-vous et ajoutez-le à vos produits favoris en un clique !<br>
      Retrouvez-les tous dans la section "Mes produits".<br><br>

    <h3>Nouveauté</h3>
    <a href="https://www.pourlesmusiciens.com/caparison-dellinger-7-fx-am-charcoal-black-matt_128243.html">
    <img src="../view/banniere.png" alt="banniere" width="100%" height="100%">
    </a>

    <br>
    <br>
      <!-- Affichage de nos produits sous formes d'icônes cliquables sur la page d'accueil -->
    <h4> Nos catégories</h4>

    <div class="grid-row" id="first-line">
      <li class="grid-column">
        <a title="Guitares électriques Stratocaster" href="../controler/afficher_stratocaster.ctrl.php">
        <img class="stratocaster" src="../data/stratocaster.jpg"><br/>
        <span>Guitares électriques<br/>Stratocaster</span>
        </a>
      </li>
      <li class="grid-column">
        <a title="Guitares électriques Telecaster" href="../controler/afficher_telecaster.ctrl.php">
        <img class="telecaster" src="../data/telecaster.jpg"><br/>
        <span>Guitares électriques<br/>Telecaster</span>
        </a>
      </li>
      <li class="grid-column">
        <a title="Guitares électriques Single Cut" href="../controler/afficher_singlecut.ctrl.php">
        <img class="singlecut" src="../data/singlecut.jpg"><br/>
        <span>Guitares électriques<br/>Single Cut</span>
        </a>
      </li>
      <li class="grid-column">
        <a title="Guitares électriques Double Cut" href="../controler/afficher_doublecut.ctrl.php">
        <img class="doublecut" src="../data/doublecut.jpg"><br/>
        <span>Guitares électriques<br/>Double Cut</span>
        </a>
      </li>
    </div>


    <div class="grid-row" id="sec-line">
      <li class="grid-column">
        <a title="Guitares Acoustiques" href="../controler/afficher_acoustique.ctrl.php">
        <img class="acoustique" src="../data/acoustique.jpg"><br/>
        <span>Guitares acoustiques</span>
        </a>
      </li>
      <li class="grid-column">
        <a title="Cordes" href="../controler/afficher_cordes.ctrl.php">
        <img class="cordes" src="../data/cordes.jpg"><br/>
        <span>Cordes</span>
        </a>
      </li>
      <li class="grid-column">
        <a title="Câbles" href="../controler/afficher_cables.ctrl.php">
        <img class="cables" src="../data/cables.jpg"><br/>
        <span>Câbles<br/></span>
        </a>
      </li>
      <li class="grid-column">
        <a title="Médiators" href="../controler/afficher_mediators.ctrl.php">
        <img class="mediators" src="../data/mediators.jpg"><br/>
        <span>Médiators<br/></span>
        </a>
      </li>
    </div>



  </body>
  </html>
