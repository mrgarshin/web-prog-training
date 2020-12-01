<?
header('Content-type: text/html; charset=utf-8');
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: auth.php");
}
$id = $_SESSION['id'];
require_once("components/db.php");
if( isset($_POST['name']) ) {
  $columnName = "name";
  $newName = htmlspecialchars( trim($_POST['name']) );
  if (empty($newName) ) {
    exit("Поле не заполнено");
  }
  $sql = "UPDATE `users` SET `name`='$newName' WHERE `id`='$id'";
} else if ( isset($_POST['lastname']) ) {
  $columnName = "lastname";
  $newName = htmlspecialchars( trim($_POST['lastname']) );
  if (empty($newName) ) {
    exit("Поле не заполнено");
  }
  $sql = "UPDATE `users` SET `lastname`='$newName' WHERE `id`='$id'";
} else if ( isset($_POST['birthday']) ) {
  $columnName = "birthday";
  $newName = htmlspecialchars( trim($_POST['birthday']) );
  if (empty($newName) ) {
    exit("Поле не заполнено");
  }
  $sql = "UPDATE `users` SET `birthday`='$newName' WHERE `id`='$id'";  
} else {
  exit("Неверные данные");
}

$result = $mysqli->query($sql);
if ($result) {
  $_SESSION[$columnName] = $newName;
  exit("Данные изменены");
} else {
  exit("Не удалось обновить данные");
}