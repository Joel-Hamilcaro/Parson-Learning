<!-- templates/list.php -->
<?php include_once 'macros.php'; ?>

<?php ob_start() ?>
    <h2><?=$lst_cours ?></h2>
    <?php echo '<p>'.($msg).'</p>' ; ?>
    <ul id="list">
        <?php foreach ($posts as $post): ?>
        <li>
          <div id = "top">
            <h3><?= $post['titre'] ?></h3>
          </div>


            <a href="/inscrireCours?id_cours=<?= $post['id_cours'] ?>">
                S'inscrire
            </a>
        </li>
        <?php endforeach ?>
    </ul>

<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
