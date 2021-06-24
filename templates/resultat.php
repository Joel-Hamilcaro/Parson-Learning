<?php $title = "resultat" ?>

<?php ob_start() ?>
<h1>Resultat</h1>
  <?php
  if ($bool["resultat"] ==1){
    print ("Vous avez reussi.");
  }else{
    print ("Vous n'avez pas réussi.");
  }
   ?>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
