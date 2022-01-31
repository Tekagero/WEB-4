<div class="signInWrapper modalWrapper">
    <div class="signInModal modal">
        <span class="signInClose modalClose">&times;</span>
        <div class="signInContent">
            <div class="title">Вход</div>
            <form class="signInForm" action="#" method="POST">
                <input class="signInLogin" type="text" placeholder="логин" minlength="5" maxlength="15" pattern="[a-zA-Z0-9]{5,15}" name="login" required>
                <input class="signInPassword" type="password" placeholder="пароль" minlength="5" maxlength="15" pattern="[a-zA-Z0-9_]{5,15}" name="password" required>
                <a class="signInOpenSignUp">Зарегистрироваться</a>
                <button class="signInButton btn" type="submit">Войти</button>
            </form>
        </div>
    </div>
</div>