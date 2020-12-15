<!DOCTYPE html>
<html lang=ru>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Дипломный проект</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  	<link rel="stylesheet" href="css/animate.css">
</head>
<body>
	<header>
		<div class="top-container">
		<div class="container"><a name="top"></a>
			<div class="nav-container clearfix">
				<a class="logo" href="#">Логотип</a>
				<nav>
					<ul class="nav-menu">
						<li><a href="#top">Главная</a></li>
						<li><a href="#about">О нас</a></li>
						<li><a href="#calendar">Календарь</a></li>
						<li><a href="#portfolio">Галерея</a></li>
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
			<a href="#feedback" class="button modal-button wow pulse animate " data-wow-iteration="infinite" data-wow-duration="1500ms">Заполнить форму!</a>
		</div> 
	</header>
	<section class="main-container"><a name="about"></a>
			<div class="title wow fadeInDown animated">
				<h2>О Нас</h2>
				<p>Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Vel suscipit, dolor deleniti illum blanditiis quod nesciunt, iusto quasi quibusdam maiores.</p>
			</div>
			<div class="about-container">
				<div class="about-card">
					<img class="about-card__img" src="img/card/card-1.jpeg" alt="">
					<h5 class="about-card__name" >Петров Пётр Петрович</h5>
					<h6 class="about-card__prof">Тут главный</h6>
				</div>
				<div class="about-card">
					<img class="about-card__img" src="img/card/card-2.jpeg" alt="">
					<h5 class="about-card__name">Катеринина Екатерина Петровна</h5>
					<h6 class="about-card__prof">Зам. тут главного</h6>
				</div>
				<div class="about-card">
					<img class="about-card__img" src="img/card/card-1.jpeg" alt="">
					<h5 class="about-card__name" >Сидоров Пётр Петрович</h5>
					<h6 class="about-card__prof">Инженер</h6>
				</div>
				<div class="about-card">
					<img class="about-card__img" src="img/card/card-4.jpeg" alt="">
					<h5 class="about-card__name" >Сидорова Анастасия Ивановна</h5>
					<h6 class="about-card__prof">Врач</h6>
				</div>
				<div class="about-card">
					<img class="about-card__img" src="img/card/card-5.jpeg" alt="">
					<h5 class="about-card__name" >Петрова Александра Сергеевна</h5>
					<h6 class="about-card__prof">левее левого</h6>
				</div>
				<div class="about-card">
					<img class="about-card__img" src="img/card/card-6.jpeg" alt="">
					<h5 class="about-card__name">Иванов Иван Иванович</h5>
					<h6 class="about-card__prof">Самый левый</h6>
				</div>
			</div>			
	</section>
	<section class="event main-container"><a name="calendar"></a>
		<div class="container">
			<div class="title wow fadeInDown animated">
				<h2>Календарь близжайших событий!</h2>
				<p>Места, в которых скоро окажусь. Пишите в форму обратной связи или в соц. сетях, чтобы присоедениться!</p>
			</div>
			<ul>
				<li class="event-container  wow slideInLeft">
					<div class="event-date">
						<p class="event-date__day">18</p>
						<p class="event-date__month">декабря</p>
					</div>
					<div class="event-info">
						<h2 class="event-info__place">Москва</h2>
						<p class="event-info__description">Защита проекта!</p>
					</div>
				</li>
				<li class="event-container wow slideInRight">
					<div class="event-date">
						<p class="event-date__day">19</p>
						<p class="event-date__month">декабря</p>
					</div>
					<div class="event-info">
						<h2 class="event-info__place">Суздаль</h2>
						<p class="event-info__description">Смотрю храмы.</p>
					</div>
				</li>
				<li class="event-container wow slideInLeft">
					<div class="event-date">
						<p class="event-date__day">20</p>
						<p class="event-date__month">декабря</p>
					</div>
					<div class="event-info">
						<h2 class="event-info__place">Владимир</h2>
						<p class="event-info__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores laborum nam dolore velit! Ullam officia qui natus quis sint?</p>
					</div>
				</li>
				<li class="event-container wow slideInRight">
					<div class="event-date">
						<p class="event-date__day">21</p>
						<p class="event-date__month">декабря</p>
					</div>
					<div class="event-info">
						<h2 class="event-info__place">Москва</h2>
						<p class="event-info__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, natus, repellat ipsam reprehenderit optio animi commodi dicta vel odit eum sit sunt laborum perferendis esse impedit iste reiciendis rem neque!</p>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<section class="portfolio main-container"><a name="portfolio"></a>
		<div class="container">
			<div class="title wow fadeInDown animated">
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
	<section class="feedback main-container"><a name="feedback"></a>
		<div class="container">
			<div class="title wow fadeInDown animated">
				<h2>Форма, чтобы заполнить</h2>
				<p>Зачем-то заполни форму и кто-то тебе перезвонит или напишет.</p>
			</div>
			<div class="form-container">
				<form action="form_obr.php" method="POST" class="feedback-form">
				    <p class="error-text"></p>
                    <input type="text" class="form" placeholder="Ваше Имя?" name="name">
                    <input type="tel" class="form" placeholder="А телефон?" name="tel">
                    <input type="text" class="form" placeholder="Адрес эл. почты" name="email">
                    <textarea name="textarea" rows="6" placeholder="Какой вопрос Вас интересует?" class="form textarea"></textarea>
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
			<a class="footer-text__admin" href="admin/auth.php">Панель администратора</a>
		</div>	
	</footer>
	<div class="scroll-up ">
		<button class="scroll-up__button">&#9650;</button>
	</div>
	<script src="script.js"></script>
 	<script src="wow.min.js"></script>
	  <script>
	  new WOW().init();
	  </script>
</body>
</html>
