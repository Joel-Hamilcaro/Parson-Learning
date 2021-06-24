<?php include_once 'macros.php'; ?>
<?php ob_start() ?>
<div class="box">
<?php if ($debug) '[div class="box"]'; ?>
<h1><?=$connexion_title?></h1>
<?php if ($msg != null) echo '<p>'.($msg).'</p>' ; ?>
<form class="login" action="/connexion" method="POST">
  <?php if ($debug) echo '[form class="login"]'; ?>
  <p><?=$username?> :</p>
  <p><input type="text" name="username" required></p>
  <p><?=$password?> :</p>
  <p><input type="password" name="pwd" required></p>
  <p><input type="submit" value=<?=$connexion_title?>></p>
  <?php if ($debug) echo '[/form class="login"]'; ?>
</form>
<?php if ($debug) '[/div class="box"]'; ?>
</div>
<?php $content = ob_get_clean() ?>
<?php include 'layout.php' ?>
