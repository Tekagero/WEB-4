<div class="signUpWrapper modalWrapper">
    <div class="signUpModal modal">
        <span class="signUpClose modalClose">&times;</span>
        <div class="signUpContent">
            <div class="title">Регистрация</div>
            <form class="signUpForm" action="#" method="POST">
                <input class="signUpLogin" type="text" placeholder="логин" name="login" minlength="5" maxlength="15"
                       pattern="[a-zA-Z0-9]{5,15}" required>
                <input class="signUpPassword" type="password" placeholder="пароль" name="password" minlength="5"
                       maxlength="15" pattern="[a-zA-Z0-9_]{5,15}" required>
                <input class="signUpRepeatPassword" type="password" placeholder="повторый пароль" name="repeatPassword"
                       minlength="5" maxlength="15" pattern="[a-zA-Z]{5,15}" required>
                <input class="signUpEmail" type="email" placeholder="email" name="email" minlength="4" maxlength="25"
                       pattern="[a-zA-Z0-9_.]{2,10}@[a-zA-Z_.]{2,10}.[a-zA-Z]{2,5}" required>
                <input class="signUpPhone" type="tel" placeholder="номер телефона" name="phone" minlength="11"
                       maxlength="11" pattern="[0-9]{11}">
                <div class="checkboxWrapper">
                    <input class="signUpAgree" type="checkbox" name="isAgreeWithPrivatePolicy" required>
                    <span>Согласен с политикой</span>
                </div>
                <button class="signUpButton btn" type="submit">Зарегистрироваться</button>
            </form>

        </div>
    </div>
</div>