<?php
$title = 'Creer un cours';
if (!isset($_SESSION['username']) || !isset($_SESSION['role']) || ($_SESSION['role']!=1) ){
  echo '<meta http-equiv="refresh" content="0.0;url=/forbidden"/>';
  exit();
}
?>

<?php ob_start() ?>
<h1>Creer un cours</h1>
<form action="/creerCours" method="post">
Titre du cours : <p><input type="text" name="titre" required></p>
<input type="submit" value="Creer un cours">
</form>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
