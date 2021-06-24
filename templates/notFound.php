<?php include_once 'macros.php'; ?>

<?php ob_start() ?>
    <p><?=$not_found?></p>
<?php $content = ob_get_clean() ?>
<?php include_once 'layout.php' ?>
