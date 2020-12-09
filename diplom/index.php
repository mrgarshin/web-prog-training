<!DOCTYPE html>
<html lang=ru>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Дипломный проект</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="top-container">
		<div class="container"><a name="top"></a>
			<div class="nav-container clearfix">
				<a class="logo" href="#feedback">Лого</a>
				<nav>
					<ul class="nav-menu">
						<li><a href="#top">Главная</a></li>
						<li><a href="#ican">Обо мне</a></li>
						<li><a href="#portfolio">Галерея</a></li>
						<li><a href="#calendar">Календарь</a></li>
						<li><a href="#feedback">Заполни форму</a></li>
					</ul>
				</nav>
			</div>
		</div>
			<div class="titles">
				<div class="titles__first">
					Рад, что мы встретились на этом пути!
				</div>
				<h1>welcome on board!</h1>
			</div>
			<!-- При нажатии на эту кнопку открывается модальное окно с формой обратной связи! -->
			<!-- <a href="#" class="button modal-button">Кнопочка!</a> -->
		</div> 
	</header> 
	<section class="main-container"><a name="ican"></a>
		<div class="container">
			<div class="title">
				<h2>Вот так могу!</h2>
				<p>Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Vel suscipit, dolor deleniti illum blanditiis quod nesciunt, iusto quasi quibusdam maiores.</p>
			</div>
			<div class="ican clearfix">
				<div class="ican__item">
					<img src="img/icon-1.png" alt="" class="ican__item-img">
					<h3>Весь мир!</h3>
					<p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Ipsam rerum voluptate cupiditate, corrupti ut? Ipsum reiciendis beatae facere dolorem aperiam?</p>
				</div>
				<div class="ican__item">
					<img src="img/icon-2.png" alt="" class="ican__item-img">
					<h3>Чудеса!</h3>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae similique quos id vel ratione tenetur commodi ex, ea reiciendis a.</p>
				</div>
				<div class="ican__item">
					<img src="img/icon-3.png" alt="" class="ican__item-img">
					<h3>Текст какой-то!</h3>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque voluptates cupiditate consequuntur, quibusdam tempora corrupti dicta atque adipisci quaerat reiciendis.</p>
				</div>
			</div>	
		</div>
	</section>
	<section class="portfolio main-container"><a name="portfolio"></a>
		<div class="container">
			<div class="title">
				<h2>Галерея фотографий!</h2>
				<p>Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Vel suscipit, dolor deleniti illum blanditiis quod nesciunt, iusto quasi quibusdam maiores.</p>
			</div>
			<div class="slider-wrapper">
				<div class="slider">
				  <div class="item">
				    <img src="https://klike.net/uploads/posts/2019-01/1547365376_1.jpg">
				  </div>
				  <div class="item">
				    <img src="https://million-wallpapers.ru/wallpapers/5/23/560771649817606/bizon-1.jpg">
				  </div>
				  <div class="item">
				    <img src="https://wozap.ru/uploads/posts/2018-02/15186825332524s.jpeg">
				  </div>
  				  <div class="item">
				    <img src="http://rasfokus.ru/images/photos/medium/f83496e2f0358820b45083c929f8e7f7.jpg">
				  </div>
				  <a class="previous" onclick="previousSlide()">&#10094;</a>
				  <a class="next" onclick="nextSlide()">&#10095;</a>
				</div>
			</div>
		</div>
	</section>
	<section class="event main-container clearfix"><a name="calendar"></a>
		<div class="container">
			<div class="title">
				<h2>Календарь близжайших событий!</h2>
				<p>Места, в которых скоро окажусь. Пишите в форму обратной связи или в соц. сетях, чтобы присоедениться!</p>
			</div>
			<ul>
				<li class="event-container">
					<div class="event-date">
						<p class="event-date__day">18</p>
						<p class="event-date__month">декабря</p>
					</div>
					<div class="event-info">
						<h2 class="event-info__place">Москва</h2>
						<p class="event-info__description">Буду защищать проект!</p>
					</div>
				</li>
				<li class="event-container">
					<div class="event-date">
						<p class="event-date__day">19</p>
						<p class="event-date__month">декабря</p>
					</div>
					<div class="event-info">
						<h2 class="event-info__place">Суздаль</h2>
						<p class="event-info__description">Кутим и смотрим храмы.</p>
					</div>
				</li>
				<li class="event-container">
					<div class="event-date">
						<p class="event-date__day">20</p>
						<p class="event-date__month">декабря</p>
					</div>
					<div class="event-info">
						<h2 class="event-info__place">Владимир</h2>
						<p class="event-info__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores laborum nam dolore velit! Ullam officia qui natus quis sint?</p>
					</div>
				</li>
								<li class="event-container">
					<div class="event-date">
						<p class="event-date__day">20</p>
						<p class="event-date__month">декабря</p>
					</div>
					<div class="event-info">
						<h2 class="event-info__place">Владимир</h2>
						<p class="event-info__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, natus, repellat ipsam reprehenderit optio animi commodi dicta vel odit eum sit sunt laborum perferendis esse impedit iste reiciendis rem neque!</p>
					</div>
				</li>
								</li>
								<li class="event-container">
					<div class="event-date">
						<p class="event-date__day">20</p>
						<p class="event-date__month">декабря</p>
					</div>
					<div class="event-info">
						<h2 class="event-info__place">Владимир</h2>
						<p class="event-info__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, natus, repellat ipsam reprehenderit optio animi commodi dicta vel odit eum sit sunt laborum perferendis esse impedit iste reiciendis rem neque!</p>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<section class="feedback main-container"><a name="feedback"></a>
		<div class="container">
			<div class="title ">
				<h2>Форма, чтобы заполнить</h2>
				<p>Зачем-то заполни форму и кто-то тебе перезвонит или напишет.</p>
			</div>
			<div class="form-container">
				<form action="form_obr.php" method="POST" class="feedback-form">
				    <p class="error-text"></p>
                    <input type="text" class="form" placeholder="Ваше Имя?" name="name">
                    <input type="tel" class="form" placeholder="А телефон?" name="tel">
                    <input type="text" class="form" placeholder="Адрес эл. почты" name="email">
                    <input type="submit" value ="Отправить!" class = "modal-button button">
           		</form>
			</div>
		</div>
		<div class="modal-window" tabindex="-1">
	      	<div class="modal-dialog">
		        <div class="modal-content">
		          <div class="modal-header">
		            <h2 class="modal-title">Форма отправлена успешно!</h2>
		            <img class="modal-img" src="https://storage.googleapis.com/multi-static-content/thumbs/artage-io-thumb-e8503579e1ac02d6a1fffdae875337a4.png" alt="">
		          </div>
		          <div class="modal-footer">
		            <button type="button" class="close-button button">Закрыть уведомление</button>
		          </div>
		        </div>
	      	</div>
    	</div>
	</section>
	<footer>
		<div class="">
			<p class="footer-text">Вот такой учебный проект. Гаршин Сергей. декабрь 2020.</p>
			<a class="footer-text__admin" href="auth.php">Панель администратора</a>
		</div>	
	</footer>
	<div class="scroll-up ">
		<a class="scroll-up__button">Наверх</a>
	</div>
	<script src="script.js"></script>
</body>
</html>
