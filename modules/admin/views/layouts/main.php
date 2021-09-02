<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\widgets\AdminMenu;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="ru-RU,ru_RU">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="img/logo.svg" type="image/x-icon">
	<?php $this->registerCsrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body>
	<?php $this->beginBody() ?>
	<header class="mob_header">
		<div class="blcontainer">
			<div class="row">
				<ul class="head_m_m">
					<li>
						<a href="" class="menu_burg">
							<span></span>	
							<span></span>	
							<span></span>	
						</a>
					</li>
					<li>
						<div class="logo_block">
							<a href="/"><img src="/img/logo.svg" alt=""></a>
							<p>	
								Подбор лучшего <br>решения для ипотеки
							</p>
						</div>
					</li>
				</ul>

				<div class="mob_plach clos">
					<ul class="menu">
						<li><a href="uslugi.php
							">Услуги</a></li>
							<li><a href="keis.php">Кейсы</a></li>
							<li><a href="/company.php">О компании</a></li>
							<li><a href="/partner.php">Партнерам</a></li>
							<li><a href="/careara.php">Карьера</a></li>
							<li><a href="/document.php">Правовая информация</a></li>
							<li><a href="/news.php">Новости и статьи</a></li>
							<li><a href="/quest.php">Вопросы и ответы</a></li>
							<li>
								<ul class="head_right">
									<li><a href="" class="phone"><span>Горячая линия:</span> +7 987 654 32 10</a></li>
								</ul>								
							</li>
							<li>
								<ul class="head_right" style=" width: 100%;">
									<li style=" width: 100%;">
										<a href="" class="login mob_fer" style="width: 100%; text-align: center;">Войти</a>
									</li>
								</ul>								
							</li>
						</ul>

					</div>			
				</div>
			</div>
		</header>

		<header>
			<div class="blcontainer">
				<div class="row">
					<div class="col-sm-4 col-xs-4 col-md-4">
						<div class="logo_block">
							<a href="/"><img src="/img/logo.svg" alt=""></a>
							<p>	
								Подбор лучшего <br>решения для ипотеки
							</p>
						</div>
					</div>
					<div class="col-sm-4 col-xs-4 col-md-4 col_clet_1">
						<ul class="menu">
							<li><a href="/uslugi
								">Услуги</a></li>
								<li><a href="/keis">Кейсы</a></li>
							</ul>
						</div>
						<div class="col-sm-4 col-xs-4 col-md-4 col_clet_2">
							<ul class="head_right">
								<li><a href="" class="phone"><span>Горячая линия:</span> +7 987 654 32 10</a></li>
								<!-- <li><a href="" class="login log_in">Войти</a></li> -->
								<li>
									<? if(Yii::$app->user->isGuest):?>
										<a href="/cabinet/login" class="login">Войти</a>
									<? else:?>
										<a href="/cabinet" class="login">Кабинет</a>
									<? endif;?>	
								</li>
							</ul>
						</div>
					</div>			
				</div>
			</header>
			<main>
				<div class="container" id="user_page">
					<div class="row">
						<div class="col-md-3">
							<?= AdminMenu::widget();?>	
						</div>
						<div class="col-md-9">
							<div class="user-index">
							<?= $content ?>			
							</div>
						</div>
					</div>
				</div>
				
			</main>
			<footer>
				<div class="blcontainer">
					<div class="row">
						<div class="col-md-4">
							<div class="logo_block">
								<a href=""><img src="/img/logo.svg" alt=""></a>
								<p>	
									Подбор лучшего <br>решения для ипотеки
								</p>
							</div>
							<div class="sclat_f">
								<p>
									ООО «ЦИК ЖИЛФОНД»  <br>
									ИНН: 7709881778 <br>
									ОГРН: 1117746572030 <br>
									Юридический адрес: 105120, город Москва, <br>
									4-Й Сыромятнический переулок, 1 стр.14  <br>
								</p>
							</div>

						</div>
						<div class="col-md-2 ster_fol">
							<ul class="foot-nav">
								<li><a href="/company">О компании</a></li>
								<li><a href="/partner">Партнерам</a></li>
								<li><a href="/careara.php">Карьера</a></li>
								<li><a href="/document.php">Правовая информация</a></li>
							</ul>
						</div>
						<div class="col-md-2 ster_fol">
							<ul class="foot-nav">
								<li><a href="/uslugi">Услуги</a></li>
								<li><a href="/keis">Кейсы</a></li>
								<li><a href="/news.php">Новости и статьи</a></li>
								<li><a href="/quest.php">Вопросы и ответы</a></li>
							</ul>
						</div>
						<div class="col-md-2 ster_fol">
							<ul class="contact">
								<li class="phone"><a href="">8 800 987 65 43</a></li>
								<li class="help"><a href="/quest.php">Помощь</a></li>
								<li class="graff"><a href="/contact">Работа офиса</a></li>
							</ul>
						</div>
						<div class="col-md-2 ">
							<ul class="social">
								<li>Мобильное приложение</li>
								<li class="appSoc">
									<a href=""><img src="/img/GoogP.svg" alt=""></a>
									<a href=""><img src="/img/AppS.svg" alt=""></a>
								</li>
								<li>Социальные сети</li>
								<li>
									<a href="">
										<img src="/img/vk.svg" alt="">
									</a>
									<a href="">
										<img src="/img/instagram.svg" alt="">
									</a>
									<a href="">
										<img src="/img/Youtube.svg" alt="">
									</a>
									<a href="">
										<img src="/img/Facebook.svg" alt="">
									</a>
								</li>
							</ul>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<ul class="footer_bootom">
								<li>© 2016-<?$date = new \DateTime(); echo $date->format('Y');?>, ООО «ЦИК Жилфонд»</li>
								<li>Использование сайта означает согласие с <a href="">Пользовательским соглашением</a> и <a href="">Политикой обработки персональных данных</a></li>
							</ul>
						</div>
					</div>
				</div>
			</footer>

			<?
			$this->registerJs("
				$('.log_in').on('click', function(e){
					e.preventDefault();
					if($('.page_modal').hasClass('open')){
						$('.page_modal').removeClass('open');
						}else{
							$('.page_modal').addClass('open');
						}
						});
						$('.close_tag').on('click', function(e){
							if($('.page_modal').hasClass('open')){
								$('.page_modal').removeClass('open');
								}else{
									$('.page_modal').addClass('open');
								}

								});
								$('.reg_bt').on('click', function(e){
									e.preventDefault();
									var data = $('#regUserForm').serializeArray();
									$.post('/cabinet/register', data, Success);
									function Success(data){
										
										var result = JSON.parse(data);
										console.log(result.error);
										if(result.error == '1'){
											$('p.error').html(result.messege);
										}else{
										document.location = document.location;
									}
									}
									});
									");
									?>

									<?php $this->endBody() ?>
								</body>
								</html>
								<?php $this->endPage() ?>
