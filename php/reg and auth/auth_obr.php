<?
header('Content-type: text/html; charset=utf-8');
$login = htmlspecialchars( trim($_POST["login"]));
$password = htmlspecialchars( trim($_POST["password"]));

if(empty($login) || empty($password) ) {
    exit("Не все поля заполнены");
}

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

if (isset($result) && password_verify($password, $result['password'])) {
    exit("Пользователь успешно вошёл.");
} else {
    exit("Неверный логин или пароль!");
}