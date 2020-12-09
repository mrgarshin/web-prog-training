<?
header('Content-Type: text/html; charset=utf-8');


$name = htmlspecialchars( trim($_POST["name"]));
$tel = htmlspecialchars( trim($_POST["tel"]));
$email = htmlspecialchars( trim($_POST["email"]));

if(empty($name) || empty($tel) || empty($email)) {
    exit("Не все поля заполнены");
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("В адресе электронной почты нет знака -  @! Для успешной регистрации необходимо его добавить!");
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

$result = $mysqli->query("INSERT INTO `users`(`name`, `tel`, `email`) VALUES ('$name', '$tel', '$email')");
if ($result) {
    exit("ok");
} else {
    exit("Не удалось добавить пользователя.");
}