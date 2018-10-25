<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>GuitarPlace</title>
  <link rel="stylesheet" type="text/css" href="../view/design/menu.css">
  <style media="screen">
    </style>
  </head>
  <body>
    <nav id="navigation">
      <ul>
        <li class="navigation"><a href="../controler/afficher_accueil.ctrl.php"><b>Accueil</b></a></li>
        <!-- Si l'utilisateur est connecté on affiche les la barre de menu avec ce qu'il peut faire -->
        <?php if (isset($_SESSION['pseudo'])) { ?>
          <li class="bouton"><a href="#"><b>Guitares Electriques</b></a>
            <ul class="submenu2">
              <li class="bouton"><a href="../controler/afficher_stratocaster.ctrl.php"><b>Modèles Stratocaster</b></a></li>
              <li class="bouton"><a href="../controler/afficher_telecaster.ctrl.php"><b>Modèles Telecaster</b></a></li>
              <li class="bouton"><a href="../controler/afficher_singlecut.ctrl.php"><b>Modèles Single Cut</b></a></li>
              <li class="bouton"><a href="../controler/afficher_doublecut.ctrl.php"><b>Modèles Double Cut</b></a></li>
            </ul>
          </li>
          <li class="bouton"><a href="../controler/afficher_acoustique.ctrl.php"><b>Guitares Acoustiques</b></a></li>
          <li class="bouton"><a href="#"><b>Accessoires</b></a>
            <ul class="submenu4">
              <li class="bouton"><a href="../controler/afficher_cordes.ctrl.php"><b>Cordes</b></a></li>
              <li class="bouton"><a href="../controler/afficher_cables.ctrl.php"><b>Câbles</b></a></li>
              <li class="bouton"><a href="../controler/afficher_mediators.ctrl.php"><b>Médiators</b></a></li>
            </ul>
          </li>
          <li class="bouton"><a href="#"><b>Mes produits</b></a></li>
          <li class="boutondroite"><a href="../controler/deconnexion.ctrl.php"><b>Se déconnecter (<?php echo $_SESSION['pseudo'];?>)</b></a></li>
        <?php } else { ?>
          <li class="bouton"><a href="#"><b>Guitares Electriques</b></a>
            <ul class="submenu2">
              <li class="bouton"><a href="../controler/afficher_stratocaster.ctrl.php"><b>Modèles Stratocaster</b></a></li>
              <li class="bouton"><a href="../controler/afficher_telecaster.ctrl.php"><b>Modèles Telecaster</b></a></li>
              <li class="bouton"><a href="../controler/afficher_singlecut.ctrl.php"><b>Modèles Single Cut</b></a></li>
              <li class="bouton"><a href="../controler/afficher_doublecut.ctrl.php"><b>Modèles Double Cut</b></a></li>
            </ul>
          </li>
          <li class="bouton"><a href="../controler/afficher_acoustique.ctrl.php"><b>Guitares Acoustiques</b></a></li>
          <li class="bouton"><a href="#"><b>Accessoires</b></a>
            <ul class="submenu4">
              <li class="bouton"><a href="../controler/afficher_cordes.ctrl.php"><b>Cordes</b></a></li>
              <li class="bouton"><a href="../controler/afficher_cables.ctrl.php"><b>Câbles</b></a></li>
              <li class="bouton"><a href="../controler/afficher_mediators.ctrl.php"><b>Médiators</b></a></li>
            </ul>
          </li>
          <li class="boutondroite"><a href="#"><b>Connexion</b></a>
            <ul class="submenu">
              <li class="bouton"><a href="../view/connexion.view.php"><b>Se connecter</b></a></li>
              <li class="bouton"><a href="../view/inscription.view.php"><b>S'inscrire</b></a></li>
            <?php } ?>
          </ul>
        </li>
      </ul>
    </nav>

    <br>

  </body>
  </html>
