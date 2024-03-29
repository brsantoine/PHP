    <html lang="en" dir="ltr">
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="initial-scale=1, width=device-width" />
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

          <link rel="stylesheet" type="text/css" href="../view/design/connexion.view.css" media="screen"/>
          <title>FNOC - Inscription</title>
        </head>
        <body>
          <header>
            <img src="../view/design/fnoc.png" alt="">
          </header>
          <form class="" action="../controler/faireInscription.ctrl.php" method="post">
            <fieldset>
              <h2>Inscrivez-vous</h2>
              <h3><?=$erreur = $erreur ?? ""?></h3>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="nom">Nom</span>
                </div>
                <input type="text" name="nom" class="form-control" aria-label="Default" aria-describedby="nom" required>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="prenom">Prénom</span>
                </div>
                <input type="text" class="form-control" aria-label="Default" aria-describedby="prenom" name="prenom" required>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="email">Mail</span>
                </div>
                <input type="email" class="form-control" aria-label="Default" aria-describedby="email" name ="email" required>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="motDePasse">Mot de passe </span>
                </div>
                <input type="password" class="form-control" aria-label="Default" aria-describedby="motDePasse" name="mdp" required>
              </div>


                <button type="submit" class="btn btn-dark"> S'inscrire</button></p>
            </fieldset>
            <a href="../view/connexion.view.php"><p>Se connecter</p></a>
          </form>
        </body>
      </html>
