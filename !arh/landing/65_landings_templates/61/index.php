<?php require 'functions.php'; ?><?php header('Content-type: text/html; charset=utf-8');
$ini = parse_ini_file('./config/config.ini');
if (!$ini) {
	echo 'Ошибка в конфигурационном файле';
	die();
}
?><!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php print $ini['title']; ?></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="viewport" content="user-scalable=1, width=1000, initial-scale=1" />
	<link rel="stylesheet" href="style/CSS_reset.css" />
	<link rel="stylesheet" href="style/style.css" />
	<?php if ($ini['head_code']) include($ini['head_code']); ?>
</head>
<body data-metrika="<?php if ($ini['metrika_id']) print $ini['metrika_id']; ?>">
	<div class="header">
		<div class="b-head-cont">
			<div class="conteiner clr">
				<div class="logo" contenteditable="true" id="id-block1">
					<img src="images/logo.png" alt="" />
				</div>
				<div class="head-contacts">
					<div class="b-phone-order">
						<?php if ($ini['phone']) { ?><div class="phone-num"><i class="phone-icon"></i><?php print $ini['phone'];?></div><?php } ?>
						<a href="#" class="call-request">Заказать звонок</a>
					</div>
				</div>
				<a href="#" class="order-request-btn">Отправить заявку</a>
			</div>
		</div>
		<div class="b-order">
			<div class="conteiner order-in">
				<h1 contenteditable="true" id="id-block2"><span>Продающий</span> заголовок</h1>
				<div class="order-form-wr">
					<form class="order-form" action="form/form.php" method="post">
						<fieldset>
							<legend contenteditable="true" id="id-block3">Отправьте заявку и наш менеджер подготовит для вас несколько выгодных предложений!</legend>
							<input type="text" name="name" class="fio <?php if ($ini['name_required']) print 'required';?>" class="Ваше имя" placeholder="Ваше имя" />
							<input type="text" name="phone" class="phone phone-mask <?php if ($ini['phone_required']) print 'required';?>" placeholder="Ваш номер телефона" />
							<button type="submit" class="order-btn">Оставить заявку</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		<div class="b-action">	
			<div class="conteiner">	
				<div class="b-timer-wrap clr">
					<div class="action-info">
						<h2 contenteditable="true" id="id-block4">До конца акции осталось:</h2>
						<p class="post-title" contenteditable="true" id="id-block5">Успейте воспользоваться моментом и гарантировано получите подарки</p>
					</div>
					<div class="b-timer">
						<div class="timer clr">
							<div>
								<i class="days">00</i>
								<span class="days-text">дней</span>
							</div>
							<div>
								<i class="hours">00</i>
								<span class="hours-text">часов</span>
							</div>
							<div>
								<i class="mins">00</i>
								<span class="mins-text">минута</span>
							</div>
							<div>
								<i class="secs">00</i>
								<span class="secs-text">секунды</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="b-work-stat">
		<div class="conteiner arrow-down">
			<div contenteditable="true" id="id-block6">
				<ul class="stat-list">
					<li>
						<p class="b-num">1000</p>
						<p class="b-stat-info"><span>довольных</span> клиентов</p>
					</li>
					<li>
						<p class="b-num">25000</p>
						<p class="b-stat-info"><span>завершенных</span> проектов</p>
					</li>
					<li>
						<p class="b-num">75000</p>
						<p class="b-stat-info"><span>счастливых</span> улыбок</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="b-advantages">
		<div class="conteiner arrow-down">
			<h2 contenteditable="true" id="id-block7">Почему выбирают нас?</h2>
			<div contenteditable="true" id="id-block8">
				<ul class="adv-list">
					<li>
						<div class="adv-img">
							<img src="images/advantages/1.png" alt="" />
						</div>
						Мы делаем качественный продукт за умеренные деньги
					</li>
					<li>
						<div class="adv-img">
							<img src="images/advantages/2.png" alt="" />
						</div>
						Мы всегда выполняем работу в оговоренные сроки
					</li>
					<li>
						<div class="adv-img">
							<img src="images/advantages/3.png" alt="" />
						</div>
						Мы четко и быстро выполняем пожелания клиента
					</li>
					<li>
						<div class="adv-img">
							<img src="images/advantages/4.png" alt="" />
						</div>
						Наши проекты реально приносят прибыль 
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="b-hor-form">	
		<div class="conteiner arrow-down">
			<h2 contenteditable="true" id="id-block9">Остались вопросы?</h2>
			<p class="post-title" contenteditable="true" id="id-block10">Узнайте о других специальных предложениях и скидках нашей компании</p>
			<div class="hor-form-wr">
				<form class="order-form hor-form" name="order-form" action="form/form.php" method="post">
					<input type="text" name="name" class="fio <?php if ($ini['name_required']) print 'required';?>" placeholder="Ваше имя" />
					<input type="text" name="email" class="email <?php if ($ini['email_required']) print 'required';?>"" placeholder="Ваш e-mail" />
					<input type="text" name="phone" class="phone phone-mask <?php if ($ini['phone_required']) print 'required';?>" placeholder="Ваш телефон" />
					<button type="submit" class="order-btn b-btn">Оставить заявку</button>
				</form>
			</div>
		</div>
	</div>
	<div class="b-reviews">
		<div class="conteiner">
			<h2 contenteditable="true" id="id-block11">Отзывы</h2>
			<div class="rev-wr clr" contenteditable="true" id="id-block12">
				<div class="rev">
					<h3>Марина Краснова</h3>
					<p class="rev-cont">Повседневная практика показывает, что реализация намеченных плановых заданий требуют определения и уточнения существенных финансовых...</p>
					<div class="rev-per">
						<img src="images/reviews/1.png" alt="" />
					</div>
				</div>
				<div class="rev">
					<h3>Анастасия Любимцева</h3>
					<p class="rev-cont">С другой стороны консультация с широким активом в значительной степени обуславливает создание систем массового участия...</p>
					<div class="rev-per">
						<img src="images/reviews/2.png" alt="" />
					</div>
				</div>
				<div class="rev">
					<h3>Марьяна Рогозина</h3>
					<p class="rev-cont">Задача организации, в особенности же сложившаяся структура организации играет важную роль в формировании позиций...</p>
					<div class="rev-per">
						<img src="images/reviews/3.png" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="b-contacts">
		<div class="conteiner">
			<h2 contenteditable="true" id="id-block13">Контактная информация</h2>
			<address class="contacts-info" contenteditable="true" id="id-block14">
				<span><?php print $ini['address']; ?></span>
				<span><?php print $ini['worktime']; ?></span>
			</address>
			<div id="map"  data-coord="<?php if ($ini['map_point']) print $ini['map_point'];?>" data-center="<?php if ($ini['map_center']) print $ini['map_center'];?>"></div>
		</div>
	</div>
	
	<div class="modals">
		<div class="overlay"></div>
		<div class="modal callback-modal">
			<a href="#"	class="close-btn"></a>
			<h2>Обратный звонок</h2>
			<form class="modal-form callback-form" name="callback-form" method="post" action="form/form.php">
				<input type="hidden" name="type" value="call_request"/>
				<input type="text" name="phone" class="phone phone-mask <?php if ($ini['phone_required']) print 'required';?>" placeholder="Ваш номер телефона" />
				<button type="submit" class="modal-btn btn">Перезвоните мне</button>
			</form>
		</div>
		
		<div class="modal order-modal">
			<a class="close-btn" href="javascript:;"></a>
			<h2>Отправьте заявку</h2>
			<form class="modal-form order-modal-form" name="order-modal-form" method="post" action="form/form.php">
				<input type="hidden" name="type" value="call_request"/>
				<input type="text" name="phone" class="phone phone-mask <?php if ($ini['phone_required']) print 'required';?>" placeholder="Ваш номер телефона" />
				<button type="submit" class="modal-btn btn">Отправить заявку</button>
			</form>
		</div>
		
		<div class="modal thanks1-modal">
			<h2>Спасибо!</h2>
			<a href="#"	class="close-btn"></a>
			<p class="call-you">Ваша заявка принята! Мы свяжемся с вами<br/>в ближайшее время</p>
		</div>
		
		<div class="modal thanks2-modal">
			<h2>Спасибо!</h2>
			<a href="#"	class="close-btn"></a>
			<p class="call-you">Мы перезвоним вам в&nbsp;ближайшее время!</p>
		</div>
	</div>
	
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/jquery.form.min.js"></script>
	<script type="text/javascript" src="js/script.js?v2"></script>
<?php if ($ini['body_code']) include($ini['body_code']); ?><?php include 'functions_html.php'; ?></body>
</html>