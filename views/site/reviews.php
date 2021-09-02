<?
use app\widgets\GeneralBlock;
use app\widgets\RiwersBlock;
?>

<div class="blcontainer">
	<div class="let_pl">
		<div class="img_pl" style="background: url('img/news.png'); background-repeat: no-repeat; background-size: cover">
			<div class="ab_pret">
				<ul class="breadcram">
					<li>
						<a href="">Главная</a>
					</li>
					<li>
						/ Отзывы
					</li>
				</ul>
				<h1>Отзывы</h1>						
			</div>
		</div>
	</div>
</div>
<div class="blcontainer">
    <div class="second_block">
        <div class="row">
			<?= RiwersBlock::widget(['page' => 'let']);?>
		</div>
	</div>
</div>


<?= GeneralBlock::widget()?>