<?
use app\widgets\GeneralBlock;
?>

<div class="blcontainer">
	<div class="let_pl">
		<div class="img_pl" style="background-image: url('img/news.png'); background-repeat: no-repeat;">
			<div class="ab_pret">
				<ul class="breadcram">
					<li>
						<a href="">Главная</a>
					</li>
					<li>
						/ Новости и статьи
					</li>
				</ul>
				<h1>Новости и статьи</h1>						
			</div>
		</div>
	</div>
</div>
<div class="blcontainer" style="margin-top: 100px;">
	<div class="second_block">
		<div class="row">
			<div class="col-md-4">
				<h1 class="uslug_title" style="margin-top: 0">Читайте нас <br>с удовольствием!</h1>
			</div>
			<div class="col-md-8">
				<div class="row">
					<?php foreach ($models as $key): ?>
						<div class="col-md-6 mb-4s">
							<?if(!empty($key->img)){
								$image = '/articles/'.$key->img;
							}else{
								$image = '/img/no-photo.png';
							}?>
							<div class="new_img" style="background-image: url(<?= $image?>);">
							</div>
							<p class="title_new" style="height: 50px;">
								<?= $key->name;?>
							</p>
							<div style="height: 150px;">
								<?= mb_strimwidth($key->text, 0, 200, "...");?>
							</div>
								
							<a href="<?= (!empty($key->alias) ? '/news/'.$key->alias : '/news/'.$key->id)?>" class="more_bl" style="position: relative; bottom: 0; right: 0px">Подробнее</a>
						</div>	
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?= GeneralBlock::widget()?>