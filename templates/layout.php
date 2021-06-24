<?php include_once 'macros.php'; ?>

<!doctype html>
<html lang="fr">
  <head>
    <title><?=$website_title?></title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="author" content="Jie Tu & Joël Hamilcaro" />
    <meta name="description" content="Site d'exercices en ligne" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
    <link type="text/css" rel="stylesheet" media="all" href="style.css" />
    <script type="text/javascript" src="jquery.js"></script>

  </head>

<body>

  <header>
    <?php if ($debug) echo '[header]'; ?>
    <h4><?=$website_title?></h4>
    <nav id="nav">
      <?php if ($debug) echo '[nav]'; ?>
      <?php
        if(isset($_SESSION['username'])){
          print("<p><a href='/profile'>".$_SESSION['username']."</a></p>");
          print("<p><a href='/deconnexion'>".$deconnexion_title."</a></p>");
        } else {
          print ("<p><a href='/connexion'>".$connexion_title."</a></p><p><a href='/inscription'>".$inscription_title."</a></p>");
        }
      ?>
      <p><a href='/accueil'><?=$home_title?></a></p>
      <?php if ($debug) echo '[/nav]'; ?>
    </nav>
    <?php if ($debug) echo '[/header]'; ?>
  </header>

  <div id="content">
    <?php if ($debug) echo '[div id="content"]'; ?>
    <?= $content ?>
    <?php if ($debug) echo '[/div id="content"]'; ?>
  </div>

  <footer>
    <?php if ($debug) echo '[footer]'; ?>
    <hr>
    <p class="center">Site d'exercices en ligne : Problèmes de Parson</p>
    <p class="center">Jie Tu & Joël Hamilcaro - PW6 Groupe B</p>
    <p class="contact"> Contacts : jie.tu@etu.univ-paris-diderot.fr & joel.hamilcaro@etu.univ-paris-diderot.fr</p>
    <?php if ($debug) echo '[/footer]'; ?>
  </footer>
  </body>
</html>
