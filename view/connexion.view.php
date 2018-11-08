<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="../view/design/login.css">
  </head>

  <body>

    <!--formulaire de connexion-->
        <form  class="" action="../controler/connexion.ctrl.php" method="post">
          <header>
            Se connecter <br><br>
            <?php
            //on récupère la valeur de la variable pb transmise par le biais de l'url (par défaut = 0)
            $pb=$_GET['pb'];
            //si pb = 1 alors c'est que soit le pseudo soit le mot de passe n'est pas correct, on affiche donc un message à l'utilisateur
            if($pb==1){
              print "<h3>Le mot de passe ou le pseudo est incorrect, veuillez réessayer...</h3>";
            }
             ?>

          </header>

            <label>Pseudo</label>
            <input type="text" name="Pseudo" value="">
            <label>Mot de passe</label>
            <input type="password" name="MDP" value=""/>
            <button>Connexion</button>
        </form>



  </body>

</html>
