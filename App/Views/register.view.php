<?php require('partials/header.view.php'); ?>
<div class="login-overlay">
    <div class="center-box register-form row g-3 align-items-center justify-content-center">

        <div class="mb-10 col-md-6 offset-3">
            <span class="register-icon">
                <img src="public/images/register.png">
                <div>
                    <h3>Leesclub - Inschrijven</h3>
                </div>
            </span>
            <div class="col-md-6">
                <form method="POST" onsubmit="return false;" name="frmRegister" class="row g-3 mt-2">
                    <div class="col-md-6">
                        <label for="first_name" class="form-label">Voornaam</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" maxlength="80" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="last_name" class="form-label">Achternaam</label>
                        <input type="text" class="form-control" name="last_name" id="last_name" maxlength="80" required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="email" class="form-label">Emailadres</label>
                        <input type="email" class="form-control" name="email" id="email" maxlength="255" required>
                    </div>

                    <div class="col-md-6">
                        <label for="password" class="form-label">Wachtwoord</label>
                        <input type="password" class="form-control" name="password" id="password" maxlength="50" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="password_2" class="form-label">Herhaal wachtwoord</label>
                        <input type="password" class="form-control" name="password_2" id="password_2" maxlength="50" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="city" class="form-label">Woonplaats</label>
                        <input type="text" class="form-control" name="city" id="city" maxlength="255" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="province" class="form-label">Provincie</label>
                        <input type="text" class="form-control" name="province" id="province" maxlength="255" required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="bio" class="form-label">Korte bio</label>
                        <textarea class="form-control" name="bio" id="bio" rows="3" maxlength="510"></textarea>
                    </div>

                    <div class="col-md-12 mb-3">
                        <input type="submit" class="btn btn-dark" value="Submit">
                        <input type="button" class="btn btn-dark" id="register-cancel" value="Cancel">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script src="public/js/register.js"></script>