<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cables</title>
    <link rel="stylesheet" href="../view/design/style.css">
  </head>
  <body>
    <?php

    print "<h2> Câbles </h2>";

    if (isset($_SESSION['pseudo'])){
    print "<dd>Cliquez sur une photo pour ajouter le produit dans \"Mes Produits\"";
    }

    print "<div class = 'contenair'>";

    foreach ($cables as $key => $value) {
      print '<article id="accessoires">';
      if (isset($_SESSION['pseudo'])){
          print "<div class = 'img'><a href=\"../controler/ajoutProduit.ctrl.php?categorie=cables&id=$value->id\"><img src = \"../data/BD/$value->img\"/></a></div>";
      }
      else{
          print "<div class = 'img'><img src = \"../data/BD/$value->img\"/></div>";
      }
        print "<div class = 'text'><h3> $value->nom </h3>";
        print "<p> • Longueur : $value->longueur <p>";
        print "<p> • Couleur : $value->couleur <p>";
        print "<p> • Prix : $value->prix  </p></div>";
      print '</article>';
    }

    print "</div>";

  ?>
  </body>
</html>
