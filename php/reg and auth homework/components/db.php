<<<<<<< HEAD
<?php 
$dbhost = "localhost";
$dbuser = "z92587l2_reg";
$dbpass = "WYhn8Rd%";
$dbname = "z92587l2_reg";
=======
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
<<<<<<< HEAD
} 
=======
} 
>>>>>>> 142b26098c21ff0a8e7f0685fed0911c64d226ad
