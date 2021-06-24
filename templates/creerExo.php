<?php $title = 'Creer un exercice' ?>

<?php ob_start() ?>
<h1><?=$titre_cours?></h1>
<h2>Creer un exercice</h2>
<style>
  textarea {
     resize: vertical; // none, horizontal
  }
</style>
<form action="/exo" method="post">
<p>Énoncé : </p>
<br><textarea cols="100" rows="5" name="enonce"></textarea><br>
<p>Lignes de code :</p>
<br><textarea cols="100" rows="5" name="indice"></textarea><br>
<input type="text" name="id_cours" value="<?= $post['id_cours'] ?>" hidden><br>
<input type="submit" value="Créer la solution de l'exercice">
</form>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
