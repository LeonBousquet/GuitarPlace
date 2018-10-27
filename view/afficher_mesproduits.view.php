<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mes Produits</title>
    <link rel="stylesheet" href="../view/design/style.css">
  </head>
  <body>
    <?php

    print "<h2> Mes Produits </h2>";

    print "Cliquez sur l'image du produit pour le supprimer";

    print "<div class = 'contenair'>";

    if($mesproduitsAcoustiques!=NULL){

      foreach ($mesproduitsAcoustiques as $key => $value) {
        print '<article>';
        print "<div class = 'img'><a href=\"../controler/SuppProduit.ctrl.php?categorie=acoustique&id=$value->id\"><img src = \"../data/BD/$value->img\"/></a></div>";
          print "<div class = 'text'><h3> $value->nom </h3>";
          if($value->electroacoustique =='oui'){
            print "<p> Electro-Acoustique <p>";
          }
          print "<p> • Prix : $value->prix  </p></div>";
        print '</article>';
      }
    }

    if($mesproduitsStratocaster!=NULL){

      foreach ($mesproduitsStratocaster as $key => $value) {
        print '<article>';
      print "<div class = 'img'><a href=\"../controler/SuppProduit.ctrl.php?categorie=stratocaster&id=$value->id\"><img src = \"../data/BD/$value->img\"/></a></div>";
          print "<div class = 'text'><h3> $value->nom </h3>";
          print "<p> • Couleur : $value->couleur <p>";
          print "<p> • Prix : $value->prix  </p></div>";
        print '</article>';
      }
    }

    if($mesproduitsTelecaster!=NULL){

      foreach ($mesproduitsTelecaster as $key => $value) {
        print '<article>';
      print "<div class = 'img'><a href=\"../controler/SuppProduit.ctrl.php?categorie=telecaster&id=$value->id\"><img src = \"../data/BD/$value->img\"/></a></div>";
          print "<div class = 'text'><h3> $value->nom </h3>";
          print "<p> • Couleur : $value->couleur <p>";
          print "<p> • Prix : $value->prix  </p></div>";
        print '</article>';
      }
    }

    if($mesproduitsSingleCut!=NULL){

      foreach ($mesproduitsSingleCut as $key => $value) {
        print '<article>';
      print "<div class = 'img'><a href=\"../controler/SuppProduit.ctrl.php?categorie=singlecut&id=$value->id\"><img src = \"../data/BD/$value->img\"/></a></div>";
          print "<div class = 'text'><h3> $value->nom </h3>";
          print "<p> • Couleur : $value->couleur <p>";
          print "<p> • Prix : $value->prix  </p></div>";
        print '</article>';
      }
    }

    if($mesproduitsDoubleCut!=NULL){

      foreach ($mesproduitsDoubleCut as $key => $value) {
        print '<article>';
      print "<div class = 'img'><a href=\"../controler/SuppProduit.ctrl.php?categorie=doublecut&id=$value->id\"><img src = \"../data/BD/$value->img\"/></a></div>";
          print "<div class = 'text'><h3> $value->nom </h3>";
          print "<p> • Couleur : $value->couleur <p>";
          print "<p> • Prix : $value->prix  </p></div>";
        print '</article>';
      }
    }

    if($mesproduitscables!=NULL){

      foreach ($mesproduitscables as $key => $value) {
        print '<article>';
      print "<div class = 'img'><a href=\"../controler/SuppProduit.ctrl.php?categorie=cables&id=$value->id\"><img src = \"../data/BD/$value->img\"/></a></div>";
          print "<div class = 'text'><h3> $value->nom </h3>";
          print "<p> • Longueur : $value->longueur <p>";
          print "<p> • Couleur : $value->couleur <p>";
          print "<p> • Prix : $value->prix  </p></div>";
        print '</article>';
      }
    }

    if($mesproduitscordes!=NULL){

      foreach ($mesproduitscordes as $key => $value) {
        print '<article>';
      print "<div class = 'img'><a href=\"../controler/SuppProduit.ctrl.php?categorie=cordes&id=$value->id\"><img src = \"../data/BD/$value->img\"/></a></div>";
          print "<div class = 'text'><h3> $value->nom </h3>";
          print "<p> • Type : $value->type <p>";
          print "<p> • Tirant : $value->tirant <p>";
          print "<p> • Prix : $value->prix  </p></div>";
        print '</article>';
      }
    }

    if($mesproduitsmediator!=NULL){

      foreach ($mesproduitsmediator as $key => $value) {
        print '<article>';
      print "<div class = 'img'><a href=\"../controler/SuppProduit.ctrl.php?categorie=mediators&id=$value->id\"><img src = \"../data/BD/$value->img\"/></a></div>";
          print "<div class = 'text'><h3> $value->nom </h3>";
          print "<p> • Quantite : $value->quantite <p>";
          print "<p> • Epaisseur : $value->epaisseur <p>";
          print "<p> • Matière : $value->matiere <p>";
          print "<p> • Prix : $value->prix  </p></div>";
        print '</article>';
      }
    }


    print "</div>";

  ?>
  </body>
</html>
