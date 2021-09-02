<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
//use yii\bootstrap4\Modal;
use app\widgets\Setting;
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
							<li><a href="/career">Карьера</a></li>
							<li><a href="/document.php">Правовая информация</a></li>
							<li><a href="/news">Новости и статьи</a></li>
							<li><a href="/question">Вопросы и ответы</a></li>
							<li>
								<ul class="head_right">
									<li><a href="" class="phone"><span>Горячая линия:</span> <?= Setting::widget(['let' => 'phone']);?></a></li>
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
								<li><a href="" class="phone"><span>Горячая линия:</span> <?= Setting::widget(['let' => 'phone']);?></a></li>
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
				<?= $content ?>
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
							<?= Setting::widget(['let' => 'footer_data']);?>
							</div>

						</div>
						<div class="col-md-2 ster_fol">
							<ul class="foot-nav">
								<li><a href="/company">О компании</a></li>
								<li><a href="/partner">Партнерам</a></li>
								<li><a href="/career">Карьера</a></li>
								<li><a href="/document">Правовая информация</a></li>
							</ul>
						</div>
						<div class="col-md-2 ster_fol">
							<ul class="foot-nav">
								<li><a href="/uslugi">Услуги</a></li>
								<li><a href="/keis">Кейсы</a></li>
								<li><a href="/news">Новости и статьи</a></li>
								<li><a href="/question">Вопросы и ответы</a></li>
							</ul>
						</div>
						<div class="col-md-2 ster_fol">
							<ul class="contact">
								<li class="phone"><a href=""><?= Setting::widget(['let' => 'phone']);?></a></li>
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
            <div class="modal_page_bg no-visible">
                <div class="modal_block">
                    <div class="close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </div>
                    <form action="" id="formPersona">
                        <h2>Для подачи заявки заполните все данные</h2>
                        <div class="block_error error_modal" style="color: #ff00008f">

                        </div>
                        <ul>
                            <li>
                                <input type="text" placeholder="Имя" name="name">
                            </li>
                            <li>
                                <input type="text" placeholder="Фамилия" name="firstname">
                            </li>
                            <li>
                                <input type="text" placeholder="+7(999) 999-99-99" name="phone" id="phoneForm">
                            </li>
                            <li>
                                <input type="text" placeholder="email" name="email">
                            </li>
                            <li>
                                <input type="date" placeholder="Дата" name="date">
                            </li>
                            <li style="width: 100%">
                                <div class="in_bocks in_chek_p min_p" >
                                    <span id="param3" class="vek"></span>
                                    <input type="checkbox">
                                    <label for="" style="margin-left: 10px;">Я согласен с документами</label>
                                </div>
                            </li>
                            <li>
                                <a href="" id="formSend">Отправить заявку</a>
                            </li>
                        </ul>
                    </form>

                </div>
            </div>
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
