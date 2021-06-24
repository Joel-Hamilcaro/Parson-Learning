<!-- templates/list.php -->
<?php $title = 'liste d\'exercice' ?>

<?php ob_start() ?>
    <h1>Liste d'exercices</h1>
    
    <ul id="list">
      <?php foreach ($posts1 as $post1): ?>
        <li>
          <div >
            <a href="/detailExo?id_exo=<?= $post1['id_exo'] ?>">
                <?= $post1['enonce'] ?>
                </a>
          </div>
          <div >
            &nbsp&nbsp&nbsp&nbsp&nbspTentatives: <?= $post1['nbTentative'] ?>
            &nbsp&nbsp&nbsp&nbsp&nbspSucces:
            <?php if ($post1['nbSucces'] == 0){
              print("0%");
            }else{
              print((($post1['nbSucces']/$post1['nbTentative'])*100)."%");
            }
             ?>
          </div>
        </li>
        <?php endforeach ?>

    </ul>



<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
