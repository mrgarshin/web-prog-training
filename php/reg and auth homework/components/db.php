<?php 
$dbhost = "localhost";
$dbuser = "z92587l2_reg";
$dbpass = "WYhn8Rd%";
$dbname = "z92587l2_reg";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$mysqli->set_charset("utf-8");

if ($mysqli->connect_error) {
  die("Не удалось подключиться к БД ".$mysqli->connect_error);
} 