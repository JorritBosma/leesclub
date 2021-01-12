<?php require('partials/header.view.php'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 offset-3">
            <h1><?= $vars['book']->title ?></h1>
            <h2><?= $vars['book']->id ?></h2>



            <p>Alle gegevens over het boek.</p>
            <p>Update-button.</p>
            <p>Vinkje 'gelezen' boolean.</p>
            <p>Commentaren van gebruikers.</p>
            <a href="books-edit?book_id=<?= $vars['book']->id ?>" class="btn btn-warning">Bewerken</a>
            <a href="books-delete?book_id=<?= $vars['book']->id ?>" class="btn btn-danger">Verwijderen</a>

        </div>
    </div>
</div>


<?php require('partials/footer.view.php'); ?>