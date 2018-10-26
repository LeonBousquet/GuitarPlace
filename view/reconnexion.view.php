<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="../view/design/login.css">
  </head>
  <body>
        <form  class="" action="../controler/connexion.ctrl.php" method="post">
          <header>
            Se connecter <br>
          </header>

            <label>Pseudo</label>
            <input type="text" name="Pseudo" value="">
            <label>Mot de passe</label>
            <input type="password" name="MDP" value="">
            <h3>Le mot de passe ou le pseudo est incorrect, veuillez réessayer...</h3>

            <button>Connexion</button>

        </form>

  </body>
</html>
