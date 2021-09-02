<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div id="page_lk_1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Авторизация</h2>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-pills" id="pills-reg" role="tablist">
				<li class="nav-item">
					<a class="nav-link active stell_lin" id="pills-phone-tab" data-toggle="pill" href="#pills-phone" role="tab" aria-controls="pills-home" aria-selected="true">Войти по номеру телефона</a>
				</li>
				<li class="nav-item">
					<a class="nav-link stell_lin" id="pills-email-tab" data-toggle="pill" href="#pills-email" role="tab" aria-controls="pills-profile" aria-selected="false">Войти по логину и паролю</a>

				</li>
			</ul>
		</div>
		<div class="col-md-12">
			<div class="tab-content" id="pills-tabContentReg">
				<div class="tab-pane fade show active" id="pills-phone" role="tabpanel" aria-labelledby="pills-home-tab">
					<div class="row">
						<div class="col-md-12">
							<p>Введите номер телефона,<br>
								мы пришлём на него код<br>
							подтверждения</p>
						</div>
						<div class="col-md-12">
							<input type="text" class="phone" id="reg_phone">	
						</div>
						<div class="col-md-12">
							<a href="" class="pur_link mt-34" id="openPhone">Отправить</a>			
						</div>
						<div class="col-md-12">
							<div class="in_bocks in_chek_p min_p" style="margin-top: 14px;">
								<span id="param3" class="vek"></span>
								<input type="checkbox">
								<label for="" style="margin-left: 10px;">Я согласен с документами</label>
							</div>
						</div>
						<div class="col-md-12">
							<a href="" class="gos_uslug"><img src="/img/gos.svg" alt="">Войти с помощью сайта “Госуслуги”</a>

						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="pills-email" role="tabpanel" aria-labelledby="pills-profile-tab">
					<p class="error"></p>
					<div class="log_pass">
						<? $form = ActiveForm::begin([
							'id' => 'login_cab'
						])?>
						<div class="con_l">
							<label for="regEmail">Email</label>
							<?= $form->field($model, 'username')->textInput(["placeholder" => "excample@excample.com"])->label(false)?>
						</div>
						<div class="con_l">
							<label for="">Пароль</label>
							<?= $form->field($model, 'password')->textInput(["placeholder" => "******"])->label(false)?>
						</div>
						<div class="col-md-12">
							<?= Html::submitButton('Отправить', ['class' => 'pur_link mt-34 btn_nex']) ?>
						</div>
						<div class="col-md-12">
							<div class="in_bocks in_chek_p min_p" style="margin-top: 14px;">
								<span id="param3" class="vek"></span>
								<input type="checkbox">
								<label for="" style="margin-left: 10px;">Я согласен с документами</label>
							</div>	
						</div>
						<? ActiveForm::end();?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<a href="/cabinet/new-user" class="register">Зарегистрироваться</a>
		</div>
	</div>
</div>
<?
$this->registerJs(" 
	$('#openPhone').on('click', function(e){
		e.preventDefault();
		var val = $('#reg_phone').val();
		$.post('/send/sms', {val :val}, Success);
		function Success(data){
			console.log(data);
		}
		});
 ");
?>