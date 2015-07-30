<?php require 'functions.php';
header('Content-type: text/html; charset=utf-8');
$ini = parse_ini_file('./config/config.ini');
if (!$ini) {
	echo '&#1054;&#1096;&#1080;&#1073;&#1082;&#1072; &#1074; &#1082;&#1086;&#1085;&#1092;&#1080;&#1075;&#1091;&#1088;&#1072;&#1094;&#1080;&#1086;&#1085;&#1085;&#1086;&#1084; &#1092;&#1072;&#1081;&#1083;&#1077;';
	die();
}
?><!DOCTYPE html><html><head><title><?php print $ini['title']; ?></title><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="user-scalable=yes, width=1100, initial-scale=1"><link rel="shortcut icon" href="favicon.ico" type="image/x-icon"><link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500"><link href="css/sreset.css?v123" rel="stylesheet" type="text/css"><link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css"><link href="css/user_style.css?v123" rel="stylesheet" type="text/css"><?php if ($ini['head_code']) include($ini['head_code']); ?></head><body data-metrika="<?php if ($ini['metrika_id']) print $ini['metrika_id']; ?>">
        <!-- VWO Container -->
        <div id="root_container">
            <div class="header">
                <div class="inner">
					<div id="logo" contenteditable="true"><img alt="Креселмного.ру" src="i/logo.png"></div>
                    <span data-offset="-120" data-href=".form-wrapper" class="scroll-link green-btn top-btn">ОТПРАВИТЬ ЗАЯВКУ</span>
                    <span class="open-modal call-req" data-modal="#call">Заказать звонок</span>
					<?php if ($ini['phone']) { ?><span class="phone"><?php print $ini['phone']; ?></span><?php } ?></div>
            </div>
			<div class="sl-wr">
				<div class="inner">
					
					<div class="b-slider">
						<ul id="slider"><?php $imgs = scandir('./slider');
									foreach ($imgs as $img){
										$ext = explode('.',$img);
										if ($img && in_array(strtolower(end($ext)),array('jpg','png','jpeg','gif'))){
											echo chr(60).'li'.chr(62).chr(60).'img src="slider/'.$img.'" /'.chr(62).chr(60).'/li'.chr(62);
										}
									
									}
								?></ul></div>
				</div>
			</div>
            <div class="promo clearfix">
                <div class="inner clearfix">
                    <div class="title" contenteditable="true" id="id-block1">Мягкая мебель для всех!</div>
                    <div class="post-title" contenteditable="true" id="id-block2">Подзаголовок с пояснением предложения</div>
                    <div class="product-block">
                        <div contenteditable="true" id="id-block3"><ul class="clearfix"><li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit">Груша</p>

							<p class="tit_2">кресло-мешок</p>

							<p class="tit_3">4 990.- <span> 7 425. </span></p>
							</div>
							</li>
							<li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit">Звезда</p>

							<p class="tit_2">кресло-диван</p>

							<p class="tit_3">5 990.- <span> 8 775.- </span></p>
							</div>
							</li>
							<li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit">Звезда</p>

							<p class="tit_2">кресло-диван</p>

							<p class="tit_3">5 990.- <span> 8 775.- </span></p>
							</div>
							</li>
							<li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit">Звезда</p>

							<p class="tit_2">кресло-диван</p>

							<p class="tit_3">5 990.- <span> 8 775.- </span></p>
							</div>
							</li>
							<li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit">Звезда</p>

							<p class="tit_2">кресло-диван</p>

							<p class="tit_3">5 990.- <span> 8 775.- </span></p>
							</div>
							</li>
							<li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit">Звезда</p>

							<p class="tit_2">кресло-диван</p>

							<p class="tit_3">5 990.- <span> 8 775.- </span></p>
							</div>
							</li>
							<li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit">Звезда</p>

							<p class="tit_2">кресло-диван</p>

							<p class="tit_3">5 990.- <span> 8 775.- </span></p>
							</div>
							</li>
							<li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit">Звезда</p>

							<p class="tit_2">кресло-диван</p>

							<p class="tit_3">5 990.- <span> 8 775.- </span></p>
							</div>
							</li>
							<li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit">Звезда</p>

							<p class="tit_2">кресло-диван</p>

							<p class="tit_3">5 990.- <span> 8 775.- </span></p>
							</div>
							</li>
							<li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit">Звезда</p>

							<p class="tit_2">кресло-диван</p>

							<p class="tit_3">5 990.- <span> 8 775.- </span></p>
							</div>
							</li>
							<li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit">Звезда</p>

							<p class="tit_2">кресло-диван</p>

							<p class="tit_3">5 990.- <span> 8 775.- </span></p>
							</div>
							</li>
							<li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit">Звезда</p>

							<p class="tit_2">кресло-диван</p>

							<p class="tit_3">5 990.- <span> 8 775.- </span></p>
							</div>
							</li>
								<li><img alt="" src="ckfinder/userfiles/images/box_placeholder.jpg" style="width: 190px; height: 164px;"><div class="text">
							<p class="tit">Звезда</p>

							<p class="tit_2">кресло-диван</p>

							<p class="tit_3">5 990.- <span> 8 775.- </span></p>
							</div>
							</li>
							
						</ul></div>
                    </div>
					 <div class="timer">
                            <div class="left">
                                <div class="top" contenteditable="true" id="id-block4"><span>Скачайте наш каталог </span><br>
мягкой мебели со скидкой 35%</div>
                                <div class="bottom" contenteditable="true" id="id-block5">Отправьте заявку на получение<br>
каталога и узнайте о скидках!</div>
                            </div>
                            <div class="right">
                                <div class="title">До конца акции осталось:</div>
                                <div id="timer">
                                    <span class="number-wrapper mar-rig">
                                        <span class="number days">4</span>
                                        <span class="hr"></span>
                                    </span>
                                    <span class="number-wrapper">
                                        <span class="number hurses">09</span>
                                        <span class="hr"></span>

                                    </span>
                                    <span class="number-wrapper mar-rig">
                                        <span class="number"></span>
                                        <span class="hr"></span>
                                    </span>
                                    <span class="number-wrapper">
                                        <span class="number minutes">41</span>
                                        <span class="hr"></span>

                                    </span>
                                    <span class="number-wrapper mar-rig">
                                        <span class="number"></span>
                                        <span class="hr"></span>
                                    </span>
                                    <span class="number-wrapper">
                                        <span class="number secunds">34</span>
                                        <span class="hr"></span>
                                    </span>
                                    <span class="number-wrapper end">
                                        <span class="number"></span>
                                        <span class="hr"></span>
                                    </span>
                                    <div class="clearfix"></div>
                                    <div class="string-time">
                                        <span class="ddays width30">дня</span>
                                        <span class="hhours width57">часов</span>
                                        <span class="mminutes">минута</span>
                                        <span class="ssecunds">секунды</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    <div class="right b-form">
                        <div class="form-wrapper">
                            <form class="fck" action="form/form.php" method="POST"><input type="hidden" name="type" value="catalog"><div class="form-title" contenteditable="true" id="id-block6">Получить каталог</div>
                                <p contenteditable="true" id="id-block7">В котором находятся все модели мебели нашей фирмы<br><span>со скидкой 15%</span></p>
                                <div>
                                    <input class="<?php if ($ini['name_required']) print 'required'; ?> name" placeholder="Ваше имя" type="text" name="name"></div>
                                <div>
                                    <input class="<?php if ($ini['phone_required']) print 'required'; ?> phone" placeholder="Ваш телефон" type="text" name="phone"></div>
                                <div>
                                    <input data-valid="email" class="<?php if ($ini['email_required']) print 'required'; ?> email" placeholder="Ваша электропочта" type="text" name="email"></div>

                                <div>
                                    <input class="green-btn" type="submit" name="sub" value="ОТПРАВИТЬ"></div>
                                <?php if ($ini['catalog_file']) { ?><p class="bot" contenteditable="true" id="id-block8">Каталог придет на почту сразу</p><?php } ?></form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ags">
                <div class="inner clearfix" contenteditable="true" id="id-block9"><span class="number">15</span>
<p>лет на этом<br>
рынке</p>
<span class="number">93</span>

<p>продажи<br>
в неделю</p>
<span class="number">3890</span>

<p class="end">клиентов уже<br>
используют<br>
нашу мебель</p>
</div>
            </div>
            <div class="well">
                <div class="inner">
                    <div class="title" contenteditable="true" id="id-block10">Преимущества</div>
                    <div contenteditable="true" id="id-block11"><ul class="clearfix"><li><img alt="" src="i/well1.png"><p class="tit">Легко<br>
	чистить!</p>

	<p>Экокожу и ткань легко чистить и мыть. При сильных загрязнениях подойдут и обычные чистящие средства.</p>
	</li>
	<li><img alt="" src="i/well2.png"><p class="tit">Держит форму!</p>

	<p>Потому что мы используем только качественный наполнитель. Гранулированный пенополистирол не впитывает влагу, «дышит», сохраняет тепло и форму.</p>
	</li>
	<li><img alt="" src="i/well3.png"><p class="tit">Для любых<br>
	целей!</p>

	<p>Мы предлагаем большой выбор цвета и материала для любых интерьеров. Чехол из экокожи очень прочный и износостойкий. Наши кресла прослужат вам долго, где бы вы их не использовали.</p>
	</li>
	<li><img alt="" src="i/well4.png"><p class="tit">Удобная<br>
	посадка!</p>

	<p>Кресла с ортопедическим эффектом. Принимают форму тела, разгружая позвоночник и мышцы спины. Благодаря бескаркасной технологии вы всегда найдете удобное положение.</p>
	</li>
	<li><img alt="" src="i/well5.png"><p class="tit">Безопасность<br>
	прежде всего!</p>

	<p>Мы используем высококачественные и экологически чистые материалы, которые сертифицированы и безвредны для детей. Кроме того, к ним действительно приятно прикасаться.</p>
	</li>
</ul></div>
				</div>
            </div>
            <div class="scheme">
                <div class="inner">
                    <div class="title" contenteditable="true" id="id-block12">Схема работы</div>
                    <div contenteditable="true" id="id-block13"><ul class="clearfix"><li class="width134">Вы отправляете<br>
	заявку и получаете<br>
	полный каталог<br>
	кресел по e-mail.</li>
	<li class="sep"> </li>
	<li class="width142"><br>
	Наш менеджер<br>
	связывается с вами.</li>
	<li class="sep"> </li>
	<li class="width160">Вы выбираете<br>
	кресло по каталогу,<br>
	и мы сразу же<br>
	оформляем ваш заказ.</li>
	<li class="sep"> </li>
	<li class="width197">Когда заказ будет готов<br>
	к отгрузке, мы связываемся<br>
	с вами и уточняем удобное<br>
	для вас время доставки.</li>
	<li class="sep"> </li>
	<li class="end width178">Мы доставляем кресло<br>
	точно в срок.<br>
	Оплата любым<br>
	способом при получени<br>
	заказа!</li>
</ul></div>
				</div>
            </div>
			<div class="hor-form">
				<div class="inner">
					 <form action="form/form.php" method="POST"><input type="hidden" name="type" value="catalog"><div class="title" contenteditable="true" id="id-block14">Получить весь каталог</div>
                        <p contenteditable="true" id="id-block15">Который содержит весь ассортимент мебели со <span>скидкой 15 %</span></p>
                        <div>
                            <input class="<?php if ($ini['name_required']) print 'required'; ?> name" placeholder="Ваше имя" type="text" name="name"><input class="<?php if ($ini['phone_required']) print 'required'; ?> phone" placeholder="Ваш телефон" type="text" name="phone"><input data-valid="email" class="<?php if ($ini['email_required']) print 'required'; ?> email" placeholder="Ваша электропочта" type="text" name="email"><input class="green-btn" type="submit" name="sub" value="ОТПРАВИТЬ"></div>
                        
						<?php if ($ini['catalog_file']) { ?><div class="note" contenteditable="true" id="id-block16">
                            Каталог придет на почту сразу
                        </div><?php } ?></form>
				</div>
			</div>
			<div class="b-reviews">
				<div class="inner">
					 <div class="title" contenteditable="true" id="id-block18">Отзывы</div>
					<div class="rev-wr" contenteditable="true" id="id-block19"><div class="rev-info pos-rev">
<p class="rev-cont">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

<p class="b-data">15.02.2016</p>
</div>

<div class="per-img pos-rev-img"><img alt="" src="i/per1.png"></div>
</div>
					<div class="rev-wr" contenteditable="true" id="id-block20"><div class="rev-info neg-rev">
<p class="rev-cont">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>

<p class="b-data">15.02.2016</p>
</div>

<div class="per-img pos-neg-img"><img alt="" src="i/per2.png"></div>
</div>
				</div>
			</div>
            <div class="contact">
                <div class="inner">
                    <div class="title" contenteditable="true" id="id-block17">Контактная информация</div>
					<div class="cols clearfix">
						<div id="map" data-coord="<?php if ($ini['map_point']) print $ini['map_point'];?>" data-center="<?php if ($ini['map_center']) print $ini['map_center'];?>"></div>
						<div class="adres">
							<?php if ($ini['address']) { ?><div>
									<strong>Адрес:</strong><br><?php print $ini['address']; ?></div>
							<?php } ?><?php if ($ini['email']) { ?><div class="ad_email">
									<strong>Электропочта:</strong><br><?php print chr(60).'a href="mailto:'.$ini['email'].'"'.chr(62).$ini['email'].chr(60).'/a'.chr(62);?></div>
							<?php } ?><?php if ($ini['phone']) { ?><div class="phone">
									<strong>Телефон:</strong><br><?php print $ini['phone']; ?></div>
							<?php } ?></div>
					</div>
                </div>
            </div>
            <div class="footer">
                <div>
                    <div class="inner clearfix">
                        <span class="left">© <?php print $ini['company_name'] . ', ' . date('Y'); ?></span>
                        <span class="right">Лэндинг сделан в <a target="_blank" href="http://youlp.ru/">YouLP.ru</a>
                            
                        </span>
                    </div>
                </div>
            </div>
            <div class="modals">			
                <div id="call">
                    <span class="close"></span>
                    <form action="form/form.php" method="POST"><input type="hidden" name="type" value="callback"><input type="hidden" name="call" value="1"><div class="title">Мы вам перезвоним!</div>
                        <div>
                            <input class="<?php if ($ini['name_required']) print 'required'; ?> name" placeholder="Ваше имя" type="text" name="name"></div>
                        <div>
                            <input class="required phone" placeholder="Ваш телефон" type="text" name="phone"></div>
                        <div>
                            <input class="green-btn sub_btn" type="submit" name="sub" value="ОТПРАВИТЬ"></div>
                    </form>
                </div>
                <div id="success">
                    <div>
                        <span class="close"></span>
                        <div class="title">Спасибо, ваша заявка принята!</div>
                        <p>
                            Наши операторы свяжутся с вами в ближайшее время, чтобы <br>
                            провести расчет вашего заказа!
                        </p>
                        <span class="close-text">Закрыть</span>
                    </div>
                </div>
            </div>
            <div id="overlay"></div>
        </div>
		<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script><script type="text/javascript" src="js/jquery-1.10.2-min.js"></script><script type="text/javascript" src="js/jquery.bxslider.min.js"></script><script type="text/javascript" src="js/jquery.plugins.js"></script><script type="text/javascript" src="js/common.js?v2"></script><?php if ($ini['body_code']) include($ini['body_code']); ?><?php include 'functions_html.php'; ?></body></html>