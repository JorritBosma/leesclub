<?php require('partials/header.view.php'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 offset-3">
            <h1><?= $vars['book']->title ?></h1>



            <p>Alle gegevens over het boek.</p>
            <p>Update-button.</p>
            <p>Vinkje 'gelezen' boolean.</p>
            <p>Commentaren van gebruikers.</p>
        </div>
    </div>
</div>


<?php require('partials/footer.view.php'); ?>