<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mediators</title>
    <link rel="stylesheet" href="../view/design/style.css">
  </head>
  <body>
    <?php

    print "<h2> Médiators </h2>";

    if (isset($_SESSION['pseudo'])){
    print "<dd>Cliquez sur une photo pour ajouter le produit dans \"Mes Produits\"";
    }

    print "<div class = 'choixPage'>";

      if ($_GET['id'] > 1) {
        print "<a href='?id=$prec&page=$precPage'><img src = \"../view/flecheG.png\"/></a>";
      }

      print " page $page ";

      if ($_GET['id'] != $next) {
        print "<a href='?id=$next&page=$nextPage'><img src = \"../view/flecheD.png\"/></a>";
      }

    print "</div>";

    print "<div class = 'contenair'>";

    foreach ($mediators as $key => $value) {
      print '<article id="accessoires">';
      if (isset($_SESSION['pseudo'])){
          print "<div class = 'img'><a href=\"../controler/ajoutProduit.ctrl.php?categorie=mediators&id=$value->id\"><img src = \"../data/BD/$value->img\"/></a></div>";
      }
      else{
          print "<div class = 'img'><img src = \"../data/BD/$value->img\"/></div>";
      }
        print "<div class = 'text'><h3> $value->nom </h3>";
        print "<p> • Quantite : $value->quantite <p>";
        print "<p> • Epaisseur : $value->epaisseur <p>";
        print "<p> • Matière : $value->matiere <p>";
        print "<p> • Prix : $value->prix  </p></div>";
      print '</article>';
    }

    print "</div>";

  ?>
  </body>
</html>
