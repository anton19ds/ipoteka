<?
use app\widgets\GeneralBlock;
?>

			<div class="blcontainer">
				<div class="second_block">
					<div class="row">
						<div class="col-md-12">
							<a href="" class="prew_link">
								Назад
							</a> 
						</div>
						<div class="col-md-12">
							<ul class="breadcram_us">
								<li><a href="/">Главная / </a></li>
								<li><a href="/news">Новости и Статьи /</a></li>
								<li><?= $models->name?></li>

							</ul>
						</div>
						<div class="col-md-4">
							<h1 class="uslug_title"><?= $models->name?></h1>
							<div class="date"><?= date('Y M d', $models->date);?></div>
						</div>
						<div class="col-md-8">
							<div class="low_prew" style= "background-image: url(<?= (!empty($models->img) ? '/articles/'.$models->img : '/img/no-photo.png')?>)"></div>
							<div>
								<?= $models->text?>
							</div>
							<ul class="share">
								<li>Поделиться:</li>
								<li><a href=""><img src="/img/vv.svg" alt=""></a></li>
								<li><a href=""><img src="/img/123.svg" alt=""></a></li>
								<li><a href=""><img src="/img/tt.svg" alt=""></a></li>
							</ul>
						</div>
					</div>
					<br>
					<hr>
				</div>
			</div>


				<div class="blcontainer" style="margin-top: 100px;">
			<div class="second_block">
				<div class="row">
					<div class="col-md-4">
						<h1 class="uslug_title" style="margin-top: 0">Другие <br>публикации</h1>
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6">
								<div class="new_img">
								</div>
								<p class="title_new">
									Как меньше платить по действующей ипотеке
								</p>
								<p style="font-size: 14px; margin-bottom: 20px">
									Банки, государство, застройщики регулярно улучшают 
									условия и возможности для клиентов, собирающихся 
									приобрести жилье в ипотеку: снижают ставки, дают 
									скидки и льготы. Но как быть тем, кто уже взял ипотеку?...
								</p>
								<a href="" class="more_bl" style="position: relative; bottom: 0; right: 0px">Подробнее</a>
							</div>

							<div class="col-md-6">
								<div class="new_img">
								</div>
								<p class="title_new">
									Как меньше платить по действующей ипотеке
								</p>
								<p style="font-size: 14px; margin-bottom: 20px">
									Банки, государство, застройщики регулярно улучшают 
									условия и возможности для клиентов, собирающихся 
									приобрести жилье в ипотеку: снижают ставки, дают 
									скидки и льготы. Но как быть тем, кто уже взял ипотеку?...
								</p>
								<a href="" class="more_bl" style="position: relative; bottom: 0; right: 0px">Подробнее</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
<?= GeneralBlock::widget();?>