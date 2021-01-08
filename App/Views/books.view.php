<?php require('partials/header.view.php'); ?>
<h1><?= $vars['h1'] ?></h1>
<div class="container-fluid">
    <?php if (isset($vars['books']) && count($vars['books'])) : ?>
        <div class="row">
            <?php foreach ($vars['books'] as $book) : ?>
                <div class="col-md-4">
                    <h3><?= $book->author_full_name ?></h3><br>
                    <h5><?= $book->title ?></h5>
                </div>
            <?php endforeach ?>
        </div>
    <?php else : ?>
        <h3>Geen boeken gevonden.</h3>
    <?php endif ?>
</div>

<?php require('partials/footer.view.php'); ?>