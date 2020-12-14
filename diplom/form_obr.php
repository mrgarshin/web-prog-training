<?
header('Content-Type: text/html; charset=utf-8');


$name = htmlspecialchars( trim($_POST["name"]));
$tel = htmlspecialchars( trim($_POST["tel"]));
$email = htmlspecialchars( trim($_POST["email"]));
$textarea = htmlspecialchars( trim($_POST["textarea"]));

if(empty($name) || empty($tel) || empty($email) || empty($textarea)) {
    exit("Не все поля заполнены");
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("Адрес электронной почты введён в некорректном формате!");
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

$result = $mysqli->query("INSERT INTO `users`(`name`, `tel`, `email`, `textarea` ) VALUES ('$name', '$tel', '$email', '$textarea')");
if ($result) {
    exit("ok");
} else {
    exit("Не удалось добавить пользователя.");
}