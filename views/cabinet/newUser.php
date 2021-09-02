<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Регистрация';
?>

<div id="page_lk_1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Регистрация</h2>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<? $form = ActiveForm::begin([
		'id' => 'user_reg_f',
	]);?>
	<div class="row">
		<div class="col-md-5">
			<div class="in_reg_v_form">
				<?= $form->field($model, 'name')->textInput(['placeholder' => 'Имя'])->label(false)?>		
			</div>
			
		</div>
		<div class="col-md-5">
			<div class="in_reg_v_form">
				<?= $form->field($model, 'surname')->textInput(['placeholder' => 'Фамилия'])->label(false)?>
			</div>
		</div>
		<div class="col-md-5">
			<div class="in_reg_v_form">
				<?= $form->field($model, 'phone')->textInput(['placeholder' => 'Телефон'])->label(false)?>	
			</div>
		</div>
		<div class="col-md-5">

			<div class="in_reg_v_form">
				<?= $form->field($model, 'emai')->textInput(['placeholder' => 'Email'])->label(false)?>
			</div>
		</div>

		<div class="col-md-12">
			<?= Html::submitButton('Отправить', ['class' => 'pur_link mt-34 btn_nex']) ?>
		</div>
		<div class="col-md-12">
			<div class="in_bocks in_chek_p min_p" style="margin-top: 14px;">
				<span id="param3" class="vek"></span>
				<input type="checkbox">
				<label for="" style="margin-left: 10px;">Я согласен с <a href="/document">документами</a></label>
			</div>	
		</div>
<!--		<div class="col-md-12">-->
<!--			<a href="" class="gos_uslug"><img src="/img/gos.svg" alt="">Войти с помощью сайта “Госуслуги”</a>-->
<!---->
<!--		</div>-->
	</div>
	<?php ActiveForm::end(); ?>			
	
</div>
