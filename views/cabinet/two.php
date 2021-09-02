<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?
$form = ActiveForm::begin([
	'id' => 'reg-form-two',
    //'options' => ['class' => 'form-horizontal'],
]) ?>
<?= $form->field($model, 'user_id')->hiddenInput(['value'=> $id])->label(false);?>
<div id="page_reg_1">
	<div class="container" id="collet_pr">
		<div class="row">
			<div class="col-md-12">
				<h2>Ваша регистрация</h2>
			</div>
			<div class="col-md-12">
				<ul class="pass_data">
					<li>
						<p>Паспортные данные</p>
					</li>
                    <li></li>
					<li class="pas_suc">
						<span class="pass_true" style="display: none">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
								<path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
							</svg>
						</span>
						<span class="pass_false" style="display: none">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
								<path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
							</svg>
						</span>
                        <?= $form->field($model, 'numer')->textInput(['placeholder' => 'Серия и Номер', 'required' => true])->label(false)?>
					</li>
					<li>
						<?= $form->field($model, 'cod')->textInput(['placeholder' => 'Код подразделения', 'required' => true])->label(false)?>
					</li>
					<li>
						<?= $form->field($model, 'issue')->textInput(['placeholder' => 'Кем выдан', 'required' => true])->label(false)?>
					</li>
					<li>
						<ul>
							<li><p>Дата выдачи</p></li>
							<li><?= $form->field($model, 'day_b')
									->dropDownList([ 
										'01' => '1',
										'02' => '2',
										'03' => '3',
										'04' => '4',
										'05' => '5',
										'06' => '6',
										'07' => '7',
										'08' => '8',
										'09' => '9',
										'10' => '10',
										'11' => '11',
										'12' => '12',
										'13' => '13',
										'14' => '14',
										'15' => '15',
										'16' => '16',
										'17' => '17',
										'18' => '18',
										'19' => '19',
										'20' => '20',
										'21' => '21',
										'22' => '22',
										'23' => '23',
										'24' => '24',
										'25' => '25',
										'26' => '26',
										'27' => '27',
										'28' => '28',
										'29' => '29',
										'30' => '30',
										'31' => '31'
									], ['prompt' => 'День', 'required' => true])->label(false) ?>  </li>
							       	<li><?= $form->field($model, 'mon_b')
									->dropDownList([ 
										'01' => 'январь',
										'02' => 'февраль',
										'03' => 'март',
										'04' => 'апрель',
										'05' => 'май',
										'06' => 'июнь',
										'07' => 'июль',
										'08' => 'август',
										'09' => 'сентябрь',
										'10' => 'октябрь',
										'11'	=> 'ноябрь',
										'12' => 'декабрь',
									], ['prompt' => 'Месяц', 'required' => true])->label(false) ?>  </li>
							<li><?= $form->field($model, 'yer_b')->textInput(['placeholder' => 'Год', 'required' => true])->label(false)?></li>
						</ul>
					</li>
					<li>
						
						<ul>
							<li><p>Год рождения</p></li>
							<li><?= $form->field($model, 'day_v')
									->dropDownList([ 
										1 => '1',
										2 => '2',
										3 => '3',
										4 => '4',
										5 => '5',
										6 => '6',
										7 => '7',
										8 => '8',
										9 => '9',
										10 => '10',
										11	=> '11',
										12 => '12',
										13 => '13',
										14 => '14',
										15 => '15',
										16 => '16',
										17 => '17',
										18 => '18',
										19 => '19',
										20 => '20',
										21 => '21',
										22 => '22',
										23 => '23',
										24 => '24',
										25 => '25',
										26 => '26',
										27 => '27',
										28 => '28',
										29 => '29',
										30 => '30',
										31 => '31'
									], ['prompt' => 'День', 'required' => true])->label(false) ?>  </li>
							<li><?= $form->field($model, 'mon_v')
									->dropDownList([ 
										'январь' => 'январь',
										'февраль' => 'февраль',
										'март' => 'март',
										'апрель' => 'апрель',
										'май' => 'май',
										'июнь' => 'июнь',
										'июль' => 'июль',
										'август' => 'август',
										'сентябрь' => 'сентябрь',
										'октябрь' => 'октябрь',
										'ноябрь'	=> 'ноябрь',
										'декабрь' => 'декабрь',
									], ['prompt' => 'Месяц', 'required' => true])->label(false) ?>  </li>
							<li><?= $form->field($model, 'yer_v')->textInput(['placeholder' => 'Год', 'required' => true])->label(false)?></li>
						</ul>
					</li>
					<li>
						
						<ul>
							<li><p>Место рождения</p></li>
							<li>
								<?= $form->field($model, 'place_birth')->textInput(['placeholder' => 'Место рождения', 'required' => true])->label(false)?>
							</li>
						</ul>
					</li>
					<li>
						
						<ul>
							<li>
								<p>Наличие загранпаспорта</p>
							</li>
							<? $model->zag_pasport = '0';?>
							<?= $form->field($model, 'zag_pasport')->radioList(['0' => 'Нет','1' => 'Есть'],[
								'item' => function ($index, $label, $name, $checked, $value) {
									return '<li>' . Html::radio($name, $checked, ['value' => $value]).'
									<label>'.$label.'</label></li>';
								},
							]
						)->label(false);?>
					</ul>
				</li>
			</ul>




			<ul class="adre_fr">
				<li><p>Адрес регистрации</p></li>
				<li><?= $form->field($model, 'region')->textInput(['placeholder' => 'Область'])->label(false)?></li>
				<li><?= $form->field($model, 'city')->textInput(['placeholder' => 'Город', 'required' => true])->label(false)?></li>
				<li><?= $form->field($model, 'street')->textInput(['placeholder' => 'Улица', 'required' => true])->label(false)?></li>
				<li><?= $form->field($model, 'house')->textInput(['placeholder' => 'Дом', 'required' => true])->label(false)?></li>
				<li><?= $form->field($model, 'appartament')->textInput(['placeholder' => 'Квартира'])->label(false)?></li>
				<li><?= $form->field($model, 'corpus')->textInput(['placeholder' => 'Корпус'])->label(false)?></li>
				<li><?= $form->field($model, 'bilding')->textInput(['placeholder' => 'Строение'])->label(false)?></li>
				<li><?= $form->field($model, 'post_code')->textInput(['placeholder' => 'Индекс', 'required' => true])->label(false)?></li>
			</ul>



			<ul class="adre_ft">
				<li>
					<p>Фактический адрес проживания</p>
				</li>
				<li>
					<div class="in_bocks in_chek_p min_p tru_ad" style="margin-top: 14px;" id="adress_fac">
						<span id="param3" class="vek"></span>
						<input type="checkbox">
						<label for="" style="margin: 0 10px;">Совпадает с адресом регистрации</label>
					</div>
				</li>
				<li class="op_v opset">
					<?= $form->field($model, 'fact_region')->textInput(['placeholder' => 'Область'])->label(false)?>
						
					</li>
				<li class="op_v opset"><?= $form->field($model, 'fact_city')->textInput(['placeholder' => 'Город'])->label(false)?></li>
				<li class="op_v opset"><?= $form->field($model, 'fact_street')->textInput(['placeholder' => 'Улица'])->label(false)?></li>
				<li class="op_v opset"><?= $form->field($model, 'fact_house')->textInput(['placeholder' => 'Дом'])->label(false)?></li>
				<li class="op_v opset"><?= $form->field($model, 'fact_appartament')->textInput(['placeholder' => 'Квартира'])->label(false)?></li>
				<li class="op_v opset"><?= $form->field($model, 'fact_corpus')->textInput(['placeholder' => 'Корпус'])->label(false)?></li>
				<li class="op_v opset"><?= $form->field($model, 'fact_bilding')->textInput(['placeholder' => 'Строение'])->label(false)?></li>
				<li class="op_v opset"><?= $form->field($model, 'fact_post_code')->textInput(['placeholder' => 'Индекс'])->label(false)?></li>
			</ul>
		</div>
		<div class="col-md-12">
			<?= Html::submitButton('Отправить', ['class' => 'pur_link mt-34 btn_nex']) ?>
		</div>
	</div>
</div>
</div>
<?php ActiveForm::end() ?>


<?
$this->registerJs(" 
	$('#adress_fac').on('click', function(e){
		if($(this).hasClass('tru_ad')){
			$(this).removeClass('tru_ad');
			$('li.op_v').removeClass('opset');
		}else{
			$(this).addClass('tru_ad');
			$('li.op_v').addClass('opset');
		}
	});
	$('#userparam-cod').change(function(e){
		var val = $(this).val();
		console.log(val);
		$.post('/cabinet/datacode', {val: val}, Sucsses);
			function Sucsses(data){
			$('#userparam-issue').val(data);
			//console.log(data);
			}
	});
	$('#userparam-numer').change(function(e){
		var vas = $('#userparam-numer').val();
		if(vas != ''){
			$.post('/cabinet/datapass', {vas: vas}, Sucsses);
			function Sucsses(data){
				if(data == '1'){
					$('.pass_true').css('display','block');		
					$('.pass_false').css('display','none');		
				}else{ 
					$('.pass_true').css('display','none');
					$('.pass_false').css('display','block');	
				}
				console.log(data);
			}
		}
		});
		$('#userparam-numer').change(function(e){
		var vas = $(this).val();
		var val = $('#userparam-seria').val();
		if(val != ''){
			$.post('/cabinet/datapass', {val: val, vas: vas}, Sucsses);
			function Sucsses(data){
				if(data == '1'){
						$('.pass_true').css('display','block');
						$('.pass_false').css('display','none');	
					}else{
						$('.pass_true').css('display','none');
						$('.pass_false').css('display','block');		
					}
				console.log(data);
			}
		}
		});

	");
?>


				


				