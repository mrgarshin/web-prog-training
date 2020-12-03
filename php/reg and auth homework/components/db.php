<?
$dbhost = 
$dbuser = 
$dbpass = 
$dbname = 
>>>>>>> 142b26098c21ff0a8e7f0685fed0911c64d226ad
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$mysqli->set_charset("utf-8");

if ($mysqli->connect_error) {
  die("Не удалось подключиться к БД ".$mysqli->connect_error);

