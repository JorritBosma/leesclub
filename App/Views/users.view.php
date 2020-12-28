<?php require('partials/head.php'); ?>

<h1>Alle Gebruikers</h1>


<?php foreach ($users as $user) : ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>

<h1>Vul je naam maar in hoor</h1>

<form method="POST" action="/users">
    <input name="name"></input>
    <button type="submit">Indienen maar!</button>
</form>
<?php require('partials/footer.php'); ?>