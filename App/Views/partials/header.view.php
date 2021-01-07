<header>

    <div class="row">
        <div class="col-md-6">
            <span class="book-icon">
                <img src="/public/images/book-stack-512.png">&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="/">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="/about">About</a>

            </span>
        </div>
        <div class="col-md-6 text-end">
            <div class="user-info">
                <?php if (isset($_SESSION) && isset($_SESSION['user'])) : ?>
                    <div>
                        <a href="moi"><?= $_SESSION['user']['full_name'] ?></a>
                        <span class="logout-icon">
                            <a href="logout">
                                <img src="public/images/logout-512.png" id="logout" alt="logout" title="Log out" />
                            </a>
                        </span>
                    </div>
                <?php else : ?>
                    <div>
                        <a href="/login">Log in</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="/register">Register</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

</header>