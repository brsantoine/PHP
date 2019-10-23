<?php

require_once('../framework/view.class.php');
require_once('../model/DAO.class.php');

  $dao = new DAO();
  $vue = new View();
  $ref;

    $nbArticle = 4;
    $articles =array() ;
    if (isset($_GET['ref'])){
      $ref = $_GET['ref'];
      $article = $dao->getArticle($ref);

      $vue->assign("article",$article);
      $vue->assign('config',parse_ini_file('../config/config.ini'));
      $vue->display("../view/article.view.php");
    }
    else{
      echo "<h1>Erreur de chemin dans l'url</h1>";
    }
