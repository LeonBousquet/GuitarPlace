<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="../view/design/login.css">
  </head>
  <body>

            <form  class="" action="../controler/inscription.ctrl.php" method="post">
              <header>
                Renseignez les informations ci-dessous :
              </header>
                <label>Pseudo</label>
                <input type="text" name="Pseudo" value="">
                <label>Mot de passe</label>
                <input type="password" name="MDP" value="">
                <label>Confirmer mot de passe</label>
                <input type="password" name="MDPVerif" value="">
                <button>Inscription</button>
            </form>

  </body>
</html>
