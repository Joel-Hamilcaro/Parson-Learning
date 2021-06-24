<?php $title = 'User' ?>

<?php ob_start() ?>
<h1>Etudiant</h1>
  <div >Nom : <?= $post['username'] ?></div>

  <?php
  if($post['teacher'] ==1){
    print ("<div class='role'> Rôle: Professeur </div>");

  }elseif ($post['teacher']==0){
    print ("<div class='role'> Rôle: Etudiant </div>");
    print("Tentatives : ".$post['nbTentative']."&nbsp&nbsp&nbsp&nbsp&nbsp");
    if ($post['nbSucces'] == 0){
      print("Succes :0%");
    }else{
      print("Succes :".(($post['nbSucces']/$post['nbTentative'])*100)."%");
    }
  }
  ?>


<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
