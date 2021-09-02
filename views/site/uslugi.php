<?
use app\widgets\GeneralBlock;
use app\widgets\UslugiWid;
?>
		<div class="blcontainer">
			<div class="let_pl">
				<div class="img_pl" id="uslug">
					<div class="ab_pret">
						<ul class="breadcram">
							<li>
								<a href="">Главная</a>
							</li>
							<li>
								/ Услуги
							</li>
						</ul>
						<h1>Услуги</h1>						
					</div>
				</div>
			</div>
		</div>

		<div class="blcontainer">
			<div class="second_block">
				<div class="row pb_123">

					 <?= UslugiWid::widget(['type' => '0']);?>

				</div>
			</div>

		</div>
<?= GeneralBlock::widget();?>