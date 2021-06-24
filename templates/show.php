<!-- templates/show.php -->
<?php $title = $post['username'] ?>

<?php ob_start() ?>
    <h1><?= $post['username'] ?></h1>

    <div class="id">id : <?= $post['id'] ?></div>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
