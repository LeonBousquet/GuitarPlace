<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="../view/design/login.css">
  </head>
  <body>
            <!-- formulaire d'inscription -->
            <form  class="" action="../controler/inscription.ctrl.php" method="post">
              <header>
                <!-- on récupère la valeur de la variable pb transmise via l'url. Celle-ci sert à afficher un message adéquat en
                fonction du problème détecté lors de l'inscription (voir controler) -->
                <?php $pb=$_GET['pb'];
                if($pb==1){
                    print "<h3>La confirmation du mot de passe est incorrecte, veuillez corriger...</h3>";
                }
                else if($pb==2){
                    print "<h3>Il faut choisir un pseudo pour s'incrire, renseignez le...</h3>";
                }

                else if($pb==3){
                    print "<h3>Ce pseudo existe déjà, en choisir un autre...</h3>";
                }
                else{
                  print "";
                }
              ?>

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
