<div class="blcontainer">
	<div class="let_pl">
		<div class="img_pl" style="background: url('/img/Files.png'); background-repeat: no-repeat;">
			<div class="ab_pret">
				<ul class="breadcram">
					<li>
						<a href="/">Главная</a>
					</li>
					<li>
						/ Правовая информация
					</li>
				</ul>
				<h1>Документы</h1>						
			</div>
		</div>
	</div>
</div>

<div class="blcontainer mt-5">
	<div class="second_block">
		<div class="row pb_123">
			<div class="col-md-4">
				<p class="title_s" style="margin-top: 0; line-height: 25px;">Список <br>документов</p>
			</div>
			<div class="col-md-8">
				<ul class="document_list">
					<?php if (!empty($models)): ?>
						<?php foreach ($models as $key): ?>
							<li class="item_docc">
								<p class="title_d"><?= $key->name?></p>
								<a href="" class="lin_d">Открыть документ</a>
							</li>
						<?php endforeach ?>
					<?php endif ?>
				</ul>
			</div>
		</div>
	</div>
</div>
