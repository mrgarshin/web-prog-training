<?

session_start();

require_once("components/db.php");

$deleteID = $_GET['id'];

if (!$deleteID || $deleteID == 0) {
  exit("Некорректный ID");
}

$deleteUser = $mysqli->query("SELECT * FROM `users` WHERE `id`='$deleteID'")->fetch_assoc();
if (!isset($deleteUser) || $deleteUser['is_admin'] == 1) {
  exit("Некорректный ID");
}

$result = $mysqli->query("DELETE FROM `users` WHERE `id`='$deleteID'");
if ($result) {
  header("ok");
} else {
  exit("Не удалось удалить пользователя");
}
