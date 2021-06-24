<!-- templates/list.php -->
<?php $title = 'Liste de User' ?>

<?php ob_start() ?>
    <h1>List of User</h1>
    <ul>
        <?php foreach ($posts as $post): ?>
        <li>
            <a href="/show?id=<?= $post['id'] ?>">
                <?= $post['username'] ?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>

<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
