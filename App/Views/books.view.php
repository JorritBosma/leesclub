<?php require('partials/header.view.php'); ?>
<h1><?= $vars['h1'] ?></h1>
<div class="container-fluid">
    <?php if (isset($vars['books']) && count($vars['books'])) : ?>
        <div class="row">
            <?php foreach ($vars['books'] as $book) : ?>
                <div class="col-md-4 bookindex">
                    <a href="books-show?book_id=<?= $book->id ?>">
                        <img src="public/images/one_book.png" alt="">
                        <br>
                        <h5><?= $book->title ?><h5>
                                <p> Door <?= $book->author_full_name ?></p>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    <?php else : ?>
        <h3>Geen boeken gevonden.</h3>
    <?php endif ?>
</div>

<?php require('partials/footer.view.php'); ?>