<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Categorie Guitares Electriques Single Cut</title>
    <link rel="stylesheet" href="../view/design/style.css">
  </head>
  <body>
    <?php

    print "<h2> Modèles Single Cut </h2>";

    print "<div class = 'contenair'>";

    foreach ($singlecut as $key => $value) {
      print '<article>';
        print "<div class = 'img'><img src = '../data/BD/$value->img'></div>";
        print "<div class = 'text'><h3> $value->nom </h3>";
        print "<p> • Couleur : $value->couleur <p>";
        print "<p> • Prix : $value->prix  </p></div>";
      print '</article>';
    }

    print "</div>";

  ?>
  </body>
</html>
