<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?
$form = ActiveForm::begin([
    'id' => 'reg-form',
    //'options' => ['class' => 'form-horizontal'],
]) ?>


<div id="page_reg_1">
	<div class="container">
		<div class="row">
            <div class="col-md-12">

                <?php if( Yii::$app->session->hasFlash('error') ): ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo Yii::$app->session->getFlash('error'); ?>
                    </div>
                <?php endif;?>
            </div>
			<div class="col-md-12">
				<h2>Ваша регистрация</h2>
			</div>
			<div class="col-md-12">
				<div class="l_over_data">
					<ul class="form_sk">
						<li>
							<p>Общие данные</p>
						</li>
						<li>

							<?= $form->field($model, 'name')->textInput(['placeholder' =>"Имя*"])->label(false) ?>
						</li>
						<li>
							<?= $form->field($model, 'surname')->textInput(['placeholder' => "Фамилия*"])->label(false) ?>
						</li>
						<li>
							<?= $form->field($model, 'patronymic')->textInput(['placeholder' => "Отчество", 'required' => true])->label(false) ?>
						</li>
						<li>
							<label for="">Введите номер телефона</label>
							<?= $form->field($model, 'phone')->textInput(['placeholder' => "Телефон*"])->label(false) ?>
						</li>
						<li style="position: relative">
							<label for="">Введите код подтверждения</label>
							<?= $form->field($model, 'smsCode')->textInput(['placeholder' => "Код подтверждения*"])->label(false) ?>
							<?= $form->field($model, 'succ_sms')->hiddenInput(['value'=> $model->succ_sms])->label(false) ?>
                            <img src="/img/green.svg" alt="" class="truePhone">
                            <p class="testSert">Вам отправлен код потверждения</p>
						</li>
					</ul>
				</div>
				<div class="r_over_data">
					
					<ul class="form_tk">
						<li>
							<p>Ваш пол:</p>
						</li>
						
						<?= $form->field($model, 'sex')->radioList(['1' => 'Мужчина','2' => 'Женщина'],[
            				'item' => function ($index, $label, $name, $checked, $value) {
                				return '<li>' . Html::radio($name, $checked, ['value' => $value]).'
                							<label>'.$label.'</label></li>';
            				},
        				]
    				)->label(false);?>
					</ul>
				</div>
			</div>

            <div class="col-md-12">
                <a href="" class="flofGet">Потвердить номер телефона</a>
            </div>
			<div class="col-md-12">
				 <?= Html::submitButton('Отправить', ['class' => 'pur_link mt-34 btn_nex']) ?>
			</div>
			<div class="col-md-12">
				<div class="in_bocks in_chek_p min_p">
					<span id="param3" class="vek"></span>
					<input type="checkbox">
					<label for="" style="margin-left: 10px;" class="succ">Согласен на обработку персональных данных (подробная информация).<br>
					С правилами заполнения заявки также согласен.</label>
				</div>
			</div>
		</div>
	</div>	
</div>
<?php ActiveForm::end() ?>