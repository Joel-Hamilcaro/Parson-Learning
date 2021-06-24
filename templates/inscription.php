<?php include_once 'macros.php'; ?>

<?php ob_start() ?>
  <div class="box">
  <?php if ($debug) '[div class="box"]'; ?>
<h1><?=$inscription_title?></h1>
<?php echo '<p>'.($msg).'</p>' ; ?>
<form class="login" action="/inscription" method="POST">
  <?php if ($debug) echo '[form class="login"]'; ?>
  <p><?=$username?> :</p> <p><input type="text" name="username" required></p>
  <p><?=$password?> : <span id="mdp">(?)<br></span>
  <span id="mdp_msg"> <?=$mdp_msg?> </span></p>
  <p><input type="password" name="pwd" required pattern=".{6,}"></p>
  
  <script>
  $(document).ready(function(){
    var mdp = $("#mdp");
    var mdp_msg = $("#mdp_msg");
    mdp.hover(
      function(){ mdp_msg.fadeTo(120,1); },
      function(){ mdp_msg.fadeTo(120,0.0); }
    );
    mdp_msg.fadeTo(0,0.0);
  });

  </script>

  <p> <?=$role?> : </p>
  <p>
    <?=$teacher?> <input type="radio" name="role" value="1" required>
    <?=$student?> <input type="radio" name="role" value="0">
  <p>
  <input type="submit" value="<?=$valider?>">
  </p>
  <?php if ($debug) echo '[/form class="login"]'; ?>
</form>

<?php if ($debug) '[/div class="box"]'; ?>
</div>
<?php $content = ob_get_clean() ?>
<?php include_once 'layout.php' ?>
