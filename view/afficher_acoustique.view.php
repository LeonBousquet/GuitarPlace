<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Categorie Guitares Acoustiques</title>
    <link rel="stylesheet" href="../view/design/style.css">
  </head>
  <body>
    <?php

    print "<h2> Guitares acoustiques </h2>";

    //test si un utilisateur est connecté pour lui afficher le message

    if (isset($_SESSION['pseudo'])){
      print "<dd>Cliquez sur une photo pour ajouter le produit dans \"Mes Produits\"";
    }

    print "<div class = 'choixPage'>";

    //affichage des flèches de navigation
      if ($_GET['id'] > 1) {
        print "<a href='?id=$prec&page=$precPage'><img src = \"../view/flecheG.png\"/></a>";
      }

      print " page $page ";

      if ($_GET['id'] != $next) {
        print "<a href='?id=$next&page=$nextPage'><img src = \"../view/flecheD.png\"/></a>";
      }

    print "</div>";

    print '</br>';

    print "<div class = 'contenair'>";

    foreach ($acoustique as $key => $value) {
      print '<article id="guitares">';
      // si l'utilisateur est connecté alors il a la possibilité d'ajouter des produits à ses favoris en cliquant sur l'image
      if (isset($_SESSION['pseudo'])){
          print "<div class = 'img'><a href=\"../controler/ajoutProduit.ctrl.php?categorie=acoustique&id=$value->id\"><img src = \"../data/BD/$value->img\"/></a></div>";
      }
      else{
          print "<div class = 'img'><img src = \"../data/BD/$value->img\"/></div>";
      }
        print "<div class = 'text'><h3> $value->nom </h3>";
        if($value->electroacoustique =='oui'){
          print "<p> Electro-Acoustique <p>";
        }
        print "<p> • Prix : $value->prix  </p></div>";
      print '</article>';
    }

    print "</div>";

  ?>
  </body>
</html>
