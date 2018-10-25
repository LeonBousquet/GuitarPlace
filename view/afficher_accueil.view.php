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
    <nav id="navigation">
      <ul>
        <li class="navigation"><a href="../controler/afficher_accueil.ctrl.php"><b>Accueil</b></a></li>
        <!-- Si l'utilisateur est connecté on affiche les la barre de menu avec ce qu'il peut faire -->
        <?php if (isset($_SESSION['pseudo'])) { ?>
          <li class="bouton"><a href="#"><b>Guitares Electriques</b></a>
            <ul class="submenu2" id="submenu2">
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

    <h4> Nos catégories</h4>

    <div class="grid-row" id="first-line">
      <li class="grid-column">
        <a title="Guitares électriques Stratocaster" href="../controler/afficher_stratocaster.ctrl.php">
        <img class="stratocaster" src="https://thumbs.static-thomann.de/thumb//thumb180x200/pics/prod/372488.jpg"><br/>
        <span>Guitares électriques<br/>Stratocaster</span>
        </a>
      </li>
      <li class="grid-column">
        <a title="Guitares électriques Telecaster" href="../controler/afficher_telecaster.ctrl.php">
        <img class="telecaster" src="https://thumbs.static-thomann.de/thumb//thumb180x200/pics/prod/402463.jpg"><br/>
        <span>Guitares électriques<br/>Telecaster</span>
        </a>
      </li>
      <li class="grid-column">
        <a title="Guitares électriques Single Cut" href="../controler/afficher_singlecut.ctrl.php">
        <img class="singlecut" src="https://thumbs.static-thomann.de/thumb//thumb180x200/pics/prod/147148.jpg"><br/>
        <span>Guitares électriques<br/>Single Cut</span>
        </a>
      </li>
      <li class="grid-column">
        <a title="Guitares électriques Double Cut" href="../controler/afficher_doublecut.ctrl.php">
        <img class="doublecut" src="https://thumbs.static-thomann.de/thumb//thumb180x200/pics/prod/131673.jpg"><br/>
        <span>Guitares électriques<br/>Double Cut</span>
        </a>
      </li>
    </div>


    <div class="grid-row" id="sec-line">
      <li class="grid-column">
        <a title="Guitares Acoustiques" href="../controler/afficher_acoustique.ctrl.php">
        <img class="acoustique" src="https://thumbs.static-thomann.de/thumb//thumb180x200/pics/prod/397088.jpg"><br/>
        <span>Guitares acoustiques</span>
        </a>
      </li>
      <li class="grid-column">
        <a title="Cordes" href="../controler/afficher_cordes.ctrl.php">
        <img class="cordes" src="https://thumbs.static-thomann.de/thumb//thumb180x200/pics/prod/104554.jpg"><br/>
        <span>Cordes</span>
        </a>
      </li>
      <li class="grid-column">
        <a title="Câbles" href="../controler/afficher_cables.ctrl.php">
        <img class="cables" src="https://images.static-thomann.de/pics//images/category/icons/main/ka.jpg"><br/>
        <span>Câbles<br/></span>
        </a>
      </li>
      <li class="grid-column">
        <a title="Médiators" href="../controler/afficher_mediators.ctrl.php">
        <img class="mediators" src="https://thumbs.static-thomann.de/thumb/thumb150x150/pics/prod/223625.jpg"><br/>
        <span>Médiators<br/></span>
        </a>
      </li>
    </div>



  </body>
  </html>
