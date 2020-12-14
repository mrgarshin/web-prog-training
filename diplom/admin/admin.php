<?
session_start();

require_once("components/db.php");

$result = $mysqli->query("SELECT `id`,`name`, `tel`, `email`, `textarea`, `is_admin`   FROM  `users` WHERE 1");

for($users = []; $row = $result->fetch_assoc(); $users[] = $row);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Панель управления сайтом</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="navbar">
		<a href="#logo" class="logo">Логотип</a>
		<ul class="nav">
			<li><a href="#main">Главная</a></li>
			<li><a href="#about">О Нас</a></li>
			<li><a href="#galery">Галерея</a></li>
			<li><a href="#form">Форма</a></li>
		</ul>
	</div>
	<div class="logo-area" id="logo">
		<div class="text-part">
			<h1>Логотип</h1>
			<p>Здесь можно поменять "логотип":</p>
		</div>
	</div>
	<div class="main-area" id="main">
		<div class="text-part">
			<h1>Управление главной картинкой</h1>
			<p>Здесь можно поменять "главную картинку":</p>
		</div>
	</div>
	<div class="about-area" id="about">
		<div class="text-part">
			<h1>О нас</h1>
			<p>Управление блоком "о нас"</p>
		</div>
	</div>
	<div class="galery-area" id="galery">
		<div class="text-part">
			<h1>Галерея</h1>
			<p>Здесь можно добавить фото для карусели:</p>
		</div>
	</div>
	<div class="form-area" id="form">
		<div class="text-part">
			<h1>Форма обратной связи</h1>
			<p>Вся информация из форм, заполненных на сайте:</p>
			<p class="error-text"></p>
			<table class="form-area__table">
				<tr>
					<th>ID</th>
					<th>Имя</th>
					<th>Телефон</th>
					<th>Почта</th>
					<th>Текст письма</th>
					<th>Управление</th>
				</tr>
				<?php foreach($users as $user): ?>
                <tr>
                    <td><?=$user['id']?></td>
                    <td><?=$user['name']?></td>
                    <td><?=$user['tel']?></td>
                    <td><?=$user['email']?></td>
                    <td><?=$user['textarea']?></td>
                    <td>
                        <button class="delete-button">Удалить</button>
                    </td>
                </tr>
                <?php endforeach ;?>
			</table>
		</div>
	</div>
	<div class="footer">
		<p>Закончить сессию и вернуться на главную:</p>
	        <button class="exit">&#x2716;</button>
	</div>
	<script src="js/script.js"></script>
</body>
</html>