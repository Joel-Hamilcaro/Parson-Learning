
<?php $title = "le cours" ?>

<?php ob_start() ?>
    <h2> <?= $post['titre'] ?></h2>

    <div class="createur">Créateur : <?= $post['username'] ?></div>
    <p><a href='/afficherExo?id_cours=<?= $post['id_cours'] ?>'>
      Afficher les exercices
    </a></p>
    <?php
      if (isset($_SESSION['username']) && isset($_SESSION['role'])  &&  $_SESSION['role']==1 ){
        print("<p><a href='/creerExo?id_cours=".$post['id_cours']."'> Creer un exercice  </a><p>");
        print("Liste des inscrits au cours :");
        print("<ul>");
        foreach ($etudiants as $etudiant){
          print("<li>
              <a href='/detailUser?id=".$etudiant['id_user']."'>
                  ".$etudiant['username']."
              </a>
          </li>");
        }
        print("</ul>");
        /*
        print("Nombre total de tentatives :".$post['nbTentative']."&nbsp&nbsp&nbsp&nbsp&nbsp");
        if ($post['nbSucces'] == 0){
          print("Succes :0%");
        }else{
          print("Succes :".(($post['nbSucces']/$post['nbTentative'])*100)."%");
        }*/

      }
     ?>
    <!-- <a href="/creerExo?id_cours=<?= $post['id_cours'] ?>">
        Creer un exercice
    </a> -->


    <?php if (isset($_SESSION['username']) && isset($_SESSION['role'])  &&  $_SESSION['role']==0 ){ ?>
    <p><a href='/desinscrireCours?id_cours=<?= $post['id_cours'] ?>'>
      Se desinscire
    </a></p>
    <?php } ?>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
