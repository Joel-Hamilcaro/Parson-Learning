<!-- templates/list.php -->
<?php $title = 'liste de Cours' ?>

<?php ob_start() ?>
    <h1>Liste de cours</h1>
    <ul>
        <?php foreach ($posts as $post): ?>
        <li>
            <a href="/detailCours?id_cours=<?= $post['id_cours'] ?>">
                <?= $post['titre'] ?>
            </a>
            &nbsp&nbsp&nbsp&nbsp&nbspTentatives: <?= $post['nbTentative'] ?>
            &nbsp&nbsp&nbsp&nbsp&nbspSucces:
            <?php if ($post['nbSucces'] == 0){
              print("0%");
            }else{
              print((($post['nbSucces']/$post['nbTentative'])*100)."%");
            }
            ?>
        </li>
        <?php endforeach ?>
        <?php
        if(isset($_SESSION['username']) && isset($_SESSION['role'])  &&  $_SESSION['role']==1 ){
          print("<p><a href='/creerCours'>Creer un cours</a></p>");
        }
        ?>
    </ul>

<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
