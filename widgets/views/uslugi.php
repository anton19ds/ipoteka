
<? if($type == '1'):?>
<div class="col-md-12">
	<p class="title_trel">Наши услуги</p>
</div>
<? endif;?>


<div class="col-md-7">
	<div class="row">
		<div class="blow_ret">
			<?php foreach ($uslugi as $key): ?>
				<div class="shild_rt" data-text = "<?= $key['text']?>" data-title = "<?= (!empty($key['title']) ? $key['title'] : $key['name'])?>" data-id="<?=$key['id']?>"> 
					<span class="imt_g" style="background-image: url(<?= $key['image']?>)"></span>
					<p class="pre_1">
						<span><?= $key['name']?></span>
						<a href="">Подробнее</a>
					</p>
				</div>
			<?php endforeach ?>
					</div>
                </div>
            </div>
            <div class="col-md-5">
            	<div class="col-right">
            		<p class="name_us" >Выбор оптимальной программы <br>кредитования и Банка</p>
            		<p class="col-in text_us" >
            			Исходя из проведенного анализа Клиента<br> 
            			по ряду параметров, мы подбираем оптимальную<br> 
            			для Вас ипотечную программу и Банк <br>
            			с наиболее привлекательными условиями. 
            		</p>
            		<a href="" class="addZayavka">Подать заявку</a>
            	</div>
            </div>

<?
$this->registerJs("
	$('.shild_rt').on('click', function(e){
		var name = $(this).data('title');
		var text = $(this).data('text');

		$('.name_us').html(name);
		$('.text_us').html(text);

		});
 ");
?>
