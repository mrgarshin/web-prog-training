<?
header('Content-type: text/html; charset=utf-8');
//Принимаем данные
$login = $_POST["login"];
$password = $_POST["password"];
$passwordCheck = $_POST["password-check"];
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$birthday = $_POST["birthday"];
//$birthday = htmlspecialchars( trim($_POST["birthday"])); <-- можно так!

//Обрабатываем принятые данные
// trim - обрезает лишние пробелы справа и слева
$login = trim($login); 
$name = trim($name);
$lastname = trim($lastname);
$birthday = trim($birthday);

//Защищаемся от SQL-инъекции
$login = htmlspecialchars($login);
$password = htmlspecialchars($password);
$passwordCheck = htmlspecialchars($passwordCheck);
$name = htmlspecialchars($name);
$lastname = htmlspecialchars($lastname);
$birthday = htmlspecialchars($birthday);

//Валидация данных
//Проверяем, что поля не пустые
if(empty($login) || empty($password) || empty($passwordCheck) || empty($name) || empty($lastname) || empty($birthday)) {
    exit("Не все поля заполнены");//exit- return для фалйа
}

if (mb_strlen($login) < 3) {
    exit("Слишком короткий логин. Должен быть больше трёх.");
}
if ($password != $passwordCheck) {
    exit("Пароли не совпадают!");
}
//Функции для шифровки md5(),
$password = password_hash("$password, PASSWORD_BCRYPT");

//Подключаемся к БД.

$dbhost = "localhost";
$dbuser = "z92587l2_reg";
$dbpass = "WYhn8Rd%";
$dbname = "z92587l2_reg";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$mysqli->set_charset("utf-8");

if ($mysqli->connect_error) {
  die("Не удалось подключиться к БД ".$mysqli->connect_error);
}
//Ищем пользователя с таким же логином
$result = $mysqli->query("SELECT * FROM `users` WHERE `login`='$login'")->fetch_assoc();
//fetch_assoc() - переводит первую строку найденного результата в ассоциативный массив или в виде NULL, если ничего не нашел.
if(isset($result) ) {
    exit("Такой пользователь уже существует");
}

//Добавляем в базу данных
$result = $mysqli->query("INSERT INTO `users`(`login`, `password`, `name`, `lastname`, `birthday`) VALUES ('$login', '$password', '$name', '$lastname', '$birthday')");
//Все команды sql, кроме SELECT, в качестве результата возвращают булевое значение.
if ($result) {
    exit("Пользователь $login успешно добавлен.");
} else {
    exit("Не удалось добавить пользователя.");
}





echo "$login | $password | $passwordCheck | $name | $lastname | $birthday";




















