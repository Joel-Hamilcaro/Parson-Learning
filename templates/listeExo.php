<!-- templates/list.php -->
<?php $title = 'liste d\'exercice' ?>

<?php ob_start() ?>
    <h1>Liste d'exercices</h1>


    <h2> Pas encore terminé </h2>
    <ul id="list">
      <?php foreach ($posts2 as $post2): ?>

        <li>
            <a href="/detailExo?id_exo=<?= $post2['id_exo'] ?>">
                <?= $post2['enonce'] ?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>

    <h2> Terminés </h2>
    <ul id="list">
      <?php foreach ($posts1 as $post1): ?>
        <li>
            <a href="/detailExo?id_exo=<?= $post1['id_exo'] ?>">
                <?= $post1['enonce'] ?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>
    
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
