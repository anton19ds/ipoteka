<?
use app\widgets\RiwersBlock;
use app\widgets\NewsBlock;
?>
<div class="blcontainer">
	<div class="let_pl">
		<div class="img_pl" id="company">
			<div class="ab_pret" >
				<ul class="breadcram">
					<li>
						<a href="">Главная</a>
					</li>
					<li>
						/ О компании
					</li>
				</ul>
				<h1>О компании</h1>						
			</div>
		</div>
	</div>
</div>
<div class="blcontainer">
	<div class="second_block">
		<div class="block_o_company"> 
			<div class="row">
				<div class="col-md-4">
					<div class="photo_11" style="width: 315px;">
						<img src="img/noroot31.png" alt="" style="width: 315px; height: 262px;">
					</div>
				</div>
				<div class="col-md-8">
					<div class="block_text_o">
						<div class="galce_o">
							<img src="img/galck.svg" alt="">
						</div>
						<p>Наша компания начиналась с того, что мы оформляли ипотеку для себя. Пройдя весь этот 
							нелегкий путь, мы начали помогать с оформлением родственникам, друзьям и знакомым. 
						С тех пор прошло 14 лет, но подход к работе так и остался: "Как для себя".</p>
						<span class="at1">Лилия Решетникова</span>
						<span class="at2">Генеральный директор</span>
					</div>
					<div class="row block_2_tr">
						<div class="col-md-6">
							<div class="plum">
								>750 млн. ₽
								<p>Ипотечных кредитов оформили<br> нашим клиентам за 2019 год</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="plum">
								98,3%
								<p>Общий процент одобряемости <br>ипотечного кредита у наших клиентов</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="plum">
								14 лет
								<p>На рынке ипотечного кредитования<br>Москвы и других регионов РФ</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="blcontainer">
	<div class="second_block">
		<div class="row">
            <? if(!empty($empoloes)):?>
                <div class="col-md-12">
                    <p class="title_trel">Наша команда</p>
                </div>
                <? $i=1;?>
                <? foreach($empoloes as $key):?>
                    <div class="col-md-9  <? if($i%2 == 0) echo 'offset-md-3 mt-1-nb';?>  <? if($i!=0) echo 'mt-1-nb';?>">
                        <ul class="stet_sot">
                            <li>
                                <div class="img_bl" <?if(!empty($key['image'])) echo 'style="background-image:url('.$key['image'].')"'?> >
                                </div>
                            </li>
                            <li>
                                <ul>
                                    <?php if(!empty($key['name'])):?>
                                        <li><?= $key['name'];?></li>
                                    <? endif;?>
                                    <? if(!empty($key['position'])):?>
                                        <li><?= $key['position'];?></li>
                                    <? endif;?>
                                    <? if(!empty($key['description'])):?>
                                        <li>
											<p>
												<?= $key['description'];?>
											</p>
										</li>
                                    <? endif;?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <? $i= $i+1;?>
                <? endforeach;?>
            <?endif;?>
        </div>
    </div>
</div>
<? if(!empty($gallery)):?>
<div class="slider_s">
	<div class="left_block_s">
		<p>Офисная <br> жизнь</p>
	</div>
	<div class="right_block_s">
		<div class="slides">
			<ul class="slides_gallery" data-position='0'>
                <? foreach($gallery as $item):?>
                    <li>
						<? if(!empty($item['image'])):?>
							<div class="slides_item" style="background-image: url('<?= $item['image']?>')"></div>
						<? endif;?>
                    </li>
                <? endforeach;?>
			</ul>
		</div>
		<span></span>
		<ul class="bt">
			<li class="lf"><a href="" id="slideLeft"></a></li>
			<li class="rt"><a href="" id="slideRight"></a></li>
		</ul>
	</div>

</div>
<? endif;?>

<div class="blcontainer" style="margin-top: 130px;">
	<img src="/img/ewr.png" alt="">
</div>
<div class="blcontainer">
	<div class="second_block">
		<div class="row">
            <?= RiwersBlock::widget();?>
            <?= NewsBlock::widget();?>
		</div>
	</div>
</div>



<? $this->registerJs("
	var i = 0;
	$('.slides_item').each(function(e){
		i  = i + 1;
	});
	var width = 100 / i;
	$('.right_block_s span').css('width', width+'%');
	console.log(i);

"); ?>