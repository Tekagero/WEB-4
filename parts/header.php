<header class="header">
    <div class="headerName">
        <a class="hrefNameSite" href="/Laba3">Сайт объявлений</a>
    </div>
    <div class="headerButton">
        <?php if (!isset($_SESSION['userLogin'])): ?>
            <button class="headerSignInButton">Войти</button>
            <button class="headerSignUpButton">Регистрация</button>
        <?php else: ?>
            <p>Привет <?= $_SESSION['userLogin'] ?></p>
            <a class="btn exit-btn" href="logout.php">Выход</a>
        <?php endif; ?>
    </div>
</header>