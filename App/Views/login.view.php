<main class="container mt-5 register-main">
    <?php require('partials/header.view.php'); ?>
    <div class="login-overlay">
        <div class="center-box register-form row g-3 align-items-center justify-content-center">

            <div class="mb-10 col-md-6 offset-3">
                <span class="login-icon">
                    <img src="public/images/login-512.png">
                    <div>
                        <h3>Leesclub - Inloggen</h3>
                    </div>
                </span>
                <div class=" col-md-6">
                    <form method="POST" onsubmit="return false;" name="frmLogin" class="row g-3 mt-2">

                        <div class="col-md-12 mb-3">
                            <label for="email" class="form-label">Emailadres</label>
                            <input type="email" class="form-control" name="email" id="email" maxlength="255" required>
                        </div>

                        <div class="col-md-12">
                            <label for="password" class="form-label">Wachtwoord</label>
                            <input type="password" class="form-control" name="password" id="password" maxlength="50" required>
                        </div>

                        <div class="col-md-12 mb-3">
                            <input type="submit" class="btn btn-dark" value="Login">
                        </div>
                        <div class="col-md-12 mb-3">
                            <div id="login-message"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>

<script src="public/js/login.js"></script>