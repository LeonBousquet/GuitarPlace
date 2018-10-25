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

    print "<div class = 'contenair'>";

    foreach ($mediators as $key => $value) {
      print '<article>';
        print "<div class = 'img'><img src = '../data/BD/$value->img'></div>";
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
