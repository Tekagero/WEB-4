<?php
require "models/UserModel.php";
header('Content-Type: application/json');

$errors = [];
$login = $_POST['login'];
$password = $_POST['password'];

if (strlen($login) < 5 || strlen($login) > 15) {
    $errors[] = "Длина логина должна быть больше 4 и меньше 16 символов";
}

if (strlen($password) < 5 || strlen($password) > 15) {
    $errors[] = "Длина пароля должна быть больше 4 и меньше 16 символов.";
}

$userModel = new UserModel();


if (!empty($errors)) {
    echo json_encode(['errors' => $errors]);
    die();
}


if ($userModel->getUserByLogin($login) == false) {
    $errors[] = "Пользователь с таким логином не найден";
}

if ($userModel->getUserIfPasswordVerify($login, $password) == false) {
    $errors[] = "Пароль не верный";
}

if (!empty($errors)) {
    echo json_encode(['errors' => $errors]);
    die();
}

session_start();
$_SESSION["userId"] = $userModel->getUserIdByLogin($login);
$_SESSION["userLogin"] = $login;

echo json_encode(['success' => true], JSON_UNESCAPED_UNICODE);
