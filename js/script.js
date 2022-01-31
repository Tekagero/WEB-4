document.addEventListener("DOMContentLoaded", function () {

    const signInWrapper = document.querySelector(".signInWrapper");
    const signInBtn = document.querySelector(".headerSignInButton");
    const closeSignInBtn = document.querySelector(".signInClose");

    signInBtn.onclick = () => signInWrapper.style.display = "block";
    closeSignInBtn.onclick = () => signInWrapper.style.display = "none";

    const signUpWrapper = document.querySelector(".signUpWrapper");
    const signUpBtn = document.querySelector(".headerSignUpButton");
    const closeSignUpBtn = document.querySelector(".signUpClose");


    signUpBtn.onclick = () => signUpWrapper.style.display = "block";
    closeSignUpBtn.onclick = () => signUpWrapper.style.display = "none";

    document.querySelector('.signInOpenSignUp').addEventListener('click', function () {
        signInWrapper.style.display = 'none';
        signUpWrapper.style.display = 'block';
    });

    const signUpLogin = docGet(".signUpLogin");
    const signUpPassword = docGet(".signUpPassword");
    const signUpRepeatPassword = docGet(".signUpRepeatPassword");
    const signUpEmail = docGet(".signUpEmail");
    const signUpPhone = docGet(".signUpPhone");
    const signUpForm = docGet(".signUpForm");

    signUpLogin.addEventListener("input", function (e) {
        const _this = e.target;
        const validity = _this.validity;

        if (validity.valueMissing) {
            _this.setCustomValidity("Поле обязательно для заполнения");
        } else if (validity.tooLong) {
            _this.setCustomValidity("Введенное значение должно содержать меньше 15 символов");
        } else if (validity.tooShort) {
            _this.setCustomValidity("Введенной значение должно содержать минимум 5 символов");
        } else if (validity.patternMismatch) {
            _this.setCustomValidity("Неверный формат ввода. Доступны только английские буквы.")
        } else {
            _this.setCustomValidity("");
        }

    });

    signUpPassword.addEventListener("input", function (e) {
        const _this = e.target;
        const validity = _this.validity;
        if (validity.valueMissing) {
            _this.setCustomValidity("Поле обязательно для заполнения");
        } else if (validity.tooLong) {
            _this.setCustomValidity("Введенное значение должно содержать меньше 15 символов");
        } else if (validity.tooShort) {
            _this.setCustomValidity("Введенной значение должно содержать минимум 5 символов");
        } else if (validity.patternMismatch) {
            _this.setCustomValidity("Неверный формат ввода. Доступны только английские буквы, цифры и знак _")
        } else {
            _this.setCustomValidity("");
        }
    });

    signUpRepeatPassword.addEventListener("input", function (e) {
        const _this = e.target;
        const validity = _this.validity;
        if (validity.valueMissing) {
            _this.setCustomValidity("Поле обязательно для заполнения");
        } else if (validity.tooLong) {
            _this.setCustomValidity("Введенное значение должно содержать меньше 15 символов");
        } else if (validity.tooShort) {
            _this.setCustomValidity("Введенной значение должно содержать минимум 5 символов");
        } else if (_this.value !== signUpPassword.value) {
            _this.setCustomValidity("Пароли не совпадают")
        } else if (validity.patternMismatch) {
            _this.setCustomValidity("Неверный формат ввода. Доступны только английские буквы, цифры и знак _")
        } else {
            _this.setCustomValidity("");
        }
    });

    signUpEmail.addEventListener("input", function (e) {
        const _this = e.target;
        const validity = _this.validity;
        if (validity.valueMissing) {
            _this.setCustomValidity("Поле обязательно для заполнения");
        } else if (validity.tooLong) {
            _this.setCustomValidity("Введенное значение должно содержать меньше 15 символов");
        } else if (validity.tooShort) {
            _this.setCustomValidity("Введенной значение должно содержать минимум 4 символов");
        } else if (validity.typeMismatch) {
            _this.setCustomValidity("Введен некорректный email-адрес")
        } else {
            _this.setCustomValidity("");
        }
    });

    signUpPhone.addEventListener("input", function (e) {
        const _this = e.target;
        const validity = _this.validity;

        if (validity.valueMissing) {
            _this.setCustomValidity("Поле обязательно для заполнения");
        } else if (validity.tooLong) {
            _this.setCustomValidity("Введенное значение должно содержать меньше 11 символов");
        } else if (validity.tooShort) {
            _this.setCustomValidity("Введенной значение должно содержать минимум 3 символов");
        } else if (validity.typeMismatch) {
            _this.setCustomValidity("Введен некорректный телефон")
        } else if (validity.patternMismatch) {
            _this.setCustomValidity("Неверный формат ввода. Доступны только цифры.")
        } else {
            _this.setCustomValidity("");
        }
    });

    signUpForm.addEventListener("submit", function (e) {
        e.preventDefault();
        let registerForm = new FormData(signUpForm);
        fetch('sign-up.php', {
            method: 'POST',
            body: registerForm
        })

            .then(result => {
                if (result.errors) {
                    alert(result.errors);
                } else {
                    window.location.reload();
                }
            }).catch(error => console.log(error)
        );
    });


    const signInLogin = docGet(".signInLogin");
    const signInPassword = docGet(".signUpPassword");
    const signInForm = docGet(".signInForm");

    signInLogin.addEventListener("input", function (e) {
        const _this = e.target;
        const validity = _this.validity;
        if (validity.valueMissing) {
            _this.setCustomValidity("Поле обязательно для заполнения");
        } else if (validity.tooLong) {
            _this.setCustomValidity("Введенное значение должно содержать меньше 15 символов");
        } else if (validity.tooShort) {
            _this.setCustomValidity("Введенной значение должно содержать минимум 5 символов");
        } else if (validity.patternMismatch) {
            _this.setCustomValidity("Неверный формат ввода. Доступны только английские буквы.")
        } else {
            _this.setCustomValidity("");
        }
    });

    signInPassword.addEventListener("input", function (e) {
        const _this = e.target;
        const validity = _this.validity;
        if (validity.valueMissing) {
            _this.setCustomValidity("Поле обязательно для заполнения");
        } else if (validity.tooLong) {
            _this.setCustomValidity("Введенное значение должно содержать меньше 15 символов");
        } else if (validity.tooShort) {
            _this.setCustomValidity("Введенной значение должно содержать минимум 5 символов");
        } else if (validity.patternMismatch) {
            _this.setCustomValidity("Неверный формат ввода. Доступны только английские буквы, цифры и знак _")
        } else {
            _this.setCustomValidity("");
        }
    });

    signInForm.addEventListener("submit", function (e) {
        e.preventDefault();
        let authForm = new FormData(signInForm);
        fetch('sign-in.php', {
            method: 'POST',
            body: authForm
        }).then(response => response.json())
            .then(result => {
                if (result.errors) {
                    // если ошибка
                    alert(result.errors)
                } else {
                    window.location.reload();
                }
            }).catch(error => console.log(error));
    })

    function docGet(selector) {
        return document.querySelector(selector);
    }


    const btnLoadMore = document.querySelector('.btnLoadMore');

    btnLoadMore.addEventListener('click', function (e) {
        const ads = document.querySelector('.ads')
        let offset = parseInt(e.target.getAttribute("last-ad-id"))
        const url = `load-more.php?offset=${offset}`
        fetch(url)
            .then(response => response.text())
            .then(result => {
                ads.insertAdjacentHTML('beforeend', result)
                btnLoadMore.setAttribute("last-ad-id", (offset - 4).toString())
                if (offset < 0) {
                    btnLoadMore.style.display = 'none';
                }
            }).catch(error => console.log(error))

    })


});