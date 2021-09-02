<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?
$form = ActiveForm::begin([
	'id' => 'reg-form-tree',
    //'options' => ['class' => 'form-horizontal'],
]) ?>
<?= $form->field($model, 'user_id')->hiddenInput(['value'=> $id])->label(false);?>
<div id="page_reg_1">
	<div class="container" id="collet_pr">
		<div class="row">
			<div class="col-md-12">
				<h2>Сведения о работе</h2>
			</div>
			<div class="col-md-12">
				<ul class="data_wr">
					<li>
						<p>Место работы</p> 
					</li>
					<li>
						<ul>
							<li>
								<p>Выберите тип занятости</p>
							</li>
							<li id="ster_po">
								<?= $form->field($model, 'rab_type',['options'=>['tag'=>false],])->radioList([
									'1' => 'Работаю по найму',
									'2' => 'Работаю на себя',
									'3' => 'Не работаю',
								],
									['item'=>function($index, $label, $name, $checked, $value){
										$return = '<div class="in_bocks in_chek_p min_p" style="margin-top: 14px;">';
										$return .= '<input type="radio" name="' . $name . '" value="' . $value . '" id="'.$value.'_2'.$name.'">';
										$return .= '<label for="'.$value.'_2'.$name.'">'.ucwords($label).'</label></div>';
										return $return;
									}
								])->label(false); ?>		
							</li>
						</ul>
					</li>
					<li>
						<ul>
							<li><p>ИНН организации</p></li>
							<li><?= $form->field($model, 'inn_org')->textInput(['placeholder' => 'ИНН'])->label(false)?></li>
							<li style=" margin-top: 20px;" ><p>Название организации, где вы работаете</p></li>
							<li><?= $form->field($model, 'name_org')->textInput(['placeholder' => 'Наименование'])->label(false)?></li>

						</ul>
					</li>
				</ul>
				<ul class="pret_uk">
					<li>
						<p>Рабочий номер телефона</p>
						<?= $form->field($model, 'phone_org')->textInput(['placeholder' => '+7(___) ___-__-__'])->label(false)?>
					</li>
					<li>
						<p>Название вашей должности</p>
						<?= $form->field($model, 'dol_org')->textInput()->label(false)?>
					</li>
					<li>
						<p>Стаж работы в организации</p>
						<?= $form->field($model, 'staj_org')->textInput()->label(false)?>
					</li>
				</ul>
				<ul class="pref_hi">
					<li><p>Дополнительные сведения</p></li>
					<li>
						<p>Персональный доход в месяц</p>
						<?= $form->field($model, 'dohod')->textInput(['required' => true])->label(false)?>
					</li>
					<li>
						<p>Образование</p>
						<?= $form->field($model, 'obrazov')
						->dropDownList([ 
							'Начальное, среднее' => 'Начальное, среднее',
							'Неполное высшее' => 'Неполное высшее',
							'Высшее' => 'Высшее',
							'Второе высшее' => 'Второе высшее',
							'Ученая степень' => 'Ученая степень',
						], ['prompt' => 'Образование', 'required' => true])->label(false) ?>
					</li>
					<li>
						<p>Семейное положение</p>
						<?= $form->field($model, 'familia_stat')
						->dropDownList([ 
							'Холост / Не замужем' => 'Холост / Не замужем',
							'Разведен (а)' => 'Разведен (а)',
							'Гражданский брак' => 'Гражданский брак',
							'Вдовец / Вдова' => 'Вдовец / Вдова',
						], ['prompt' => 'Семейное положение', 'required' => true])->label(false) ?>
					</li>
					<li>
						<p>Количество иждивенцев</p>
						<?= $form->field($model, 'col_ijdev')->textInput()->label(false)?>
					</li>
				</ul>
			</div>
			<div class="col-md-12">
				<div class="in_bocks" style="margin-top: 60px;">
					<?=$form->field($model, 'car_license')->checkbox([ 'value' => '1', 'checked' => false])->label(false);?>
				</div>
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
	$('#userinfo-inn_org').on('change', function(e){
		var val = $('#userinfo-inn_org').val();
		$.post('/cabinet/inndata', {val: val}, Sucsses);
		function Sucsses(data){
			$('#userinfo-name_org').val(data);
			$('#userinfo-name_org').css('color','green');
		}
		});
		");
		?>