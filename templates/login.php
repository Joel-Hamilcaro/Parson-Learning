<?php
if (!isset($_SESSION['username'])){
  echo 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA';
  echo '<meta http-equiv="refresh" content="1.0;url=/forbidden"/>';
  exit();
}
?>
<?php include_once 'macros.php'; ?>
<?php $title = 'Login' ?>

<?php ob_start() ?>

<h1><?=$profile_title?></h1>
  <?php echo '<p>'.($msg).'</p>' ; ?>
  <div class="username">
    Nom d'utilisateur : <?= $_SESSION['username']?> 
  </div>
  <?php if ($debug) echo "<div>ID: ".post['id']."</div>" ?>
  <?php
  if(isset($_SESSION['username']) && isset($_SESSION['role'])  &&  $_SESSION['role']==1 ){
    print ("<div class='role'>".$role." : ".$teacher."</div>");
    //print("<p><a href='/creerCours'>Créer un nouveau cours</a></p>");
    //print("  <p><a href='/afficherCours'>Afficher les cours</a></p>");
  } elseif (isset($_SESSION['username']) && isset($_SESSION['role'])  &&  $_SESSION['role']==0){
    print ("<div class='role'>".$role." : ".$student."</div>");
    //print ("<p><a href='/chercherCours'>S'inscrire à un cours</a></p>");
    //print ("  <p><a href='/afficherCours'>Afficher les cours</a></p>");
  }
  ?>


<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
