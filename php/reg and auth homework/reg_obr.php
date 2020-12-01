<?php
header('Content-Type: text/html; charset=utf-8');

$login = htmlspecialchars( trim($_POST["login"]));
$password = htmlspecialchars( trim($_POST["password"]));
$name = htmlspecialchars( trim($_POST["name"]));
$lastname = htmlspecialchars( trim($_POST["lastname"]));
$birthday = htmlspecialchars( trim($_POST["birthday"]));

if(empty($login) || empty($password) || empty($name) || empty($lastname) || empty($birthday)) {
    exit("Не все поля заполнены");
}

$password = password_hash($password, PASSWORD_BCRYPT);

require_once("components/db.php");

$result = $mysqli->query("SELECT * FROM `users` WHERE `login`='$login'")->fetch_assoc();
if(isset($result) ) {
    exit("Такой пользователь уже существует");
}

$result = $mysqli->query("INSERT INTO `users`(`login`, `password`, `name`, `lastname`, `birthday`) VALUES ('$login', '$password', '$name', '$lastname', '$birthday')");
if ($result) {
    exit("Пользователь $login успешно добавлен.");
} else {
    exit("Не удалось добавить пользователя.");
}