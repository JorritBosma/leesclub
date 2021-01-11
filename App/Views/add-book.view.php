<?php require('partials/header.view.php'); ?>

<div class="mt-10 center-box book-form row g-3 align-items-center justify-content-center">
    <div class="col-md-6 offset-3">
        <span class="add-book-icon">
            <img src="../public/images/add-book.png" alt="">
            <div>
                <h3>Nieuw boek</h3>
            </div>
        </span>
    </div>
    <div class="col-md-6">
        <form action="/books-add" method="POST" name="frmAddBook" class="row g-3 mt-2">
            <div class="col-md-8">
                <label for="author_first_name" class="form-label">Voornaam schrijver</label>
                <input type="text" class="form-control" name="first_name" id="first_name" maxlength="255" required>
            </div>

            <div class="col-md-4">
                <label for="author_prefix" class="form-label">Tussenvoegsel</label>
                <input type="text" class="form-control" name="author_prefix" id="author_prefix" maxlength="25">
            </div>

            <div class="col-md-8 mb-3">
                <label for="author_last_name" class="form-label">Achternaam schrijver</label>
                <input type="text" class="form-control" name="author_last_name" id="author_last_name" maxlength="255"
                    required>
            </div>

            <div class="col-md-8 mb-3">
                <label for="title" class="form-label">Titel boek</label>
                <input type="text" class="form-control" name="title" id="title" maxlength="255" required>
            </div>

            <div class="col-md-2 mb-3">
                <label for="length" class="form-label">Pagina's</label>
                <input type="number" class="form-control" name="length" id="length" placeholder="0">
            </div>

            <div class="col-md-2 mb-3">
                <label for="published_in" class="form-label">Publicatiejaar</label>
                <input type="number" class="form-control" name="published_in" id="published_in" placeholder="Jaartal">
            </div>

            <div class="col-md-2 mb-3 form-check uitgelezen">
                <input type="checkbox" class="form-check-input" id="finished_reading" name="finished_reading">
                <label for="finished_reading" class="form-check-label">Uitgelezen</label>
            </div>

            <div class="col-md-4 mb-4">
                <input type="date" class="form-control" id="finished_date" name="finished_date">
            </div>

            <div class="col-md-12 mb-3">
                <input type="submit" class="btn btn-dark" value="Submit">
                <input type="button" class="btn btn-dark" id="add-book-cancel" value="Cancel">
            </div>
        </form>
    </div>
</div>
<script src="public/js/add-book.js"></script>
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<?php require('partials/footer.view.php'); ?>