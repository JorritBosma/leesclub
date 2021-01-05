<main class="container mt-5 justify-content-center ">
    <?php require('partials/header.view.php'); ?>
    <div class="login-overlay">
        <div class="center-box register-form">
            <div class="mb-3 col-md-6 offset-3">
                <span class="register-icon">
                    <img src="public/images/register.png">
                    <div>
                        <h3>Leesclub - Inschrijven</h3>
                    </div>
                </span>
            </div>
            <div class="div col-md-6 offset-3">
                <form action="/register" method="POST" name="frmRegister" class="row g-3">
                    <div class="col-md-6">
                        <label for="first_name" class="form-label">Voornaam</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" maxlength="80"
                            required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="last_name" class="form-label">Achternaam</label>
                        <input type="text" class="form-control" name="last_name" id="last_name" maxlength="80" required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="email">Email-adres</label>
                        <input type="email" class="form-control" name="email" id="email" maxlength="255" required>
                    </div>

                    <div class="col-md-6">
                        <label for="password">Wachtwoord</label>
                        <input type="password" class="form-control" name="password" id="password" maxlength="50"
                            required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="password_2">Herhaal wachtwoord</label>
                        <input type="password" class="form-control" name="password_2" id="password_2" maxlength="50"
                            required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <input type="submit" class="btn btn-dark" value="Submit">
                        <input type="button" class="btn btn-dark" id="register-cancel" value="Cancel">
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>