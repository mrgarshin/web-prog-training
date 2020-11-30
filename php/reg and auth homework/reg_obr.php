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

$password = password_hash ($password, PASSWORD_BCRYPT);

$dbhost = "localhost";
$dbuser = "z92587l2_reg";
$dbpass = "WYhn8Rd%";
$dbname = "z92587l2_reg";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$mysqli->set_charset("utf-8");

if ($mysqli->connect_error) {
  die("Не удалось подключиться к БД ".$mysqli->connect_error);
}
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


