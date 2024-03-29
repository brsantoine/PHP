<?php require_once("ComposantsVue.class.php"); ?>
<html>
  <head>
      <title>La FNOC</title>
      <meta charset="UTF-8"/>
      <meta http-equiv="content-type" content="text/html;" />
      <meta name="author" content="La FNOC" />
      <link rel="stylesheet" type="text/css" href="../view/design/style.css" />
    </head>

    <body>
        <?php ComposantsVue::creationHeader(); ?>
        <h2>Voici votre panier <?php echo $user->getNom()." ".$user->getPrenom();?></h2>

      <?php
      foreach($panier as $key => $article): ?>
        <article class="panier">
            <h2><?=$article->getLibelCours()?></h2>
            <a href="../controler/afficherArticle.ctrl.php?ref=<?=$article->getRef()?>">
              <p><img src="<?=$image?><?=$article->getImage()?>" alt=""></a></p>
            <h2><?=$article->getPrix()?>€</h2>
            <form class="" action="../controler/modifPanier.ctrl.php" method="get">
              <input type="hidden" name="action" value= "supprime" >
              <input type="hidden" name="ref" value= <?=$article->getRef()?>>
              <button type="submit" value="Supprimer du panier" class="btn btn-primary">Supprimer du panier</button>
            </form>
        </article>

      <?php endforeach; ?>
      <form class="" action="../view/finCommande.view.php" method="get">
        <h3>Prix total : <?=$prixTotal?>€</h3>
        <input type="hidden" name="prixTotal" value=<?=$prixTotal?>>
        <p><button type="submit" class="btn btn-dark">Procéder au paiement</button></p>
      </form>
      <footer>

      </footer>
    </body>
</html>
