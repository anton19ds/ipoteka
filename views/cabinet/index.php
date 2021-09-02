<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\widgets\UserMenu;
?>

<div id="lk_kabinet">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="fid_step">
					<li>
						<p>
							<span>1</span>
							<span>Данные заполнены</span>
						</p>
						<div></div>
					</li>
					<li>
						<p>
							<span>2</span>
							<span>Заявка отправлена в банк</span>
						</p>
						<div></div>
					</li>
					<li>
						<p>
							<span>3</span>
							<span>Ваша ипотека одобрена</span>
						</p>
						<div></div>
					</li>
				</ul>
			</div>
		</div>
	</div>	
</div>
<div class="container">
	<div id="page_reg_1">
		<div class="row">
			<div class="col-md-3">
			<?= UserMenu::widget();?>
			</div>
			<div class="col-md-9">
				<div class="user_right">
					<div id="collet_pr">
						<?
							$form = ActiveForm::begin([
							'id' => 'ls-form-tree',
    						//'options' => ['class' => 'form-horizontal'],
						]) ?>
						<div class="form_a">
							<p class="tit_lb">Личные данные</p>
							<div class="row">
								<div class="col-md-4">
									<?= $form->field($user, 'name')->textInput();?>		
								</div>
								<div class="col-md-4">
									<?= $form->field($user, 'surname')->textInput();?>		
								</div>
								<div class="col-md-4">
									<?= $form->field($user, 'patronymic')->textInput();?>		
								</div>
								<div class="col-md-4">
									<?= $form->field($user, 'phone')->textInput();?>		
								</div>
								<div class="col-md-4">
									<?= $form->field($user, 'emai')->textInput();?>
								</div>
								<div class="col-md-4">
									<?= $form->field($user, 'sex')->dropDownList([
								    	'1' => 'Мужской',
   										'2' => 'Женский'
										]);?>		
								</div>
							</div>
						</div>
						<div class="form_b">
							<p class="tit_lb">Паспортные данные</p>
							<div class="row">
								<div class="col-md-2">
									<?= $form->field($userParam, 'numer')->textInput();?>		
								</div>
								<div class="col-md-2">
									<?= $form->field($userParam, 'cod')->textInput();?>		
								</div>
								<div class="col-md-2">
									<?= $form->field($userParam, 'data_issue')->textInput();?>		
								</div>
								<div class="col-md-4">
									<?= $form->field($userParam, 'issue')->textInput();?>		
								</div>
								<div class="col-md-4">
									<?= $form->field($userParam, 'year_birth')->textInput();?>		
								</div>
								<div class="col-md-8">
									<?= $form->field($userParam, 'place_birth')->textInput();?>		
								</div>
								<div class="col-md-4">
									<?= $form->field($userParam, 'region')->textInput();?>		
								</div>
								<div class="col-md-4">
									<?= $form->field($userParam, 'city')->textInput();?>
								</div>
								<div class="col-md-4">
									<?= $form->field($userParam, 'street')->textInput();?>		
								</div>
								<div class="col-md-4">
									<?= $form->field($userParam, 'house')->textInput();?>		
								</div>
								<div class="col-md-4">
									<?= $form->field($userParam, 'appartament')->textInput();?>		
								</div>
								<div class="col-md-4">
									<?= $form->field($userParam, 'corpus')->textInput();?>		
								</div>
								<div class="col-md-4">
									<?= $form->field($userParam, 'bilding')->textInput();?>		
								</div>
								<div class="col-md-4">
									<?= $form->field($userParam, 'post_code')->textInput();?>		
								</div>
							</div>
							
							
							
							
						</div>
						
						<div class="form_c">
							<p class="tit_lb">Сведения о работе</p>
							<div class="row">
								<div class="col-md-3">
									<?= $form->field($userInfo, 'inn_org')->textInput();?>		
								</div>
								<div class="col-md-4">
									<?= $form->field($userInfo, 'name_org')->textInput();?>		
								</div>
								<div class="col-md-5">
									<?= $form->field($userInfo, 'phone_org')->textInput();?>		
								</div>





								<div class="col-md-4">
									<?= $form->field($userInfo, 'dol_org')->textInput();?>		
								</div>
								<div class="col-md-2">
									<?= $form->field($userInfo, 'staj_org')->textInput();?>		
								</div>
								<div class="col-md-2">
									<?= $form->field($userInfo, 'dohod')->textInput();?>		
								</div>
								<div class="col-md-4"></div>


								<div class="col-md-4">
									<?= $form->field($userInfo, 'obrazov')->textInput();?>		
								</div>
								<div class="col-md-4">
									<?= $form->field($userInfo, 'familia_stat')->textInput();?>		
								</div>
								<div class="col-md-4">
									<?= $form->field($userInfo, 'col_ijdev')->textInput();?>		
								</div>
							</div>
							
							
							
							
							
							
							
							
							
						</div>
						<? ActiveForm::end();?>		
					</div>
				</div>
			</div>
		</div>				
	</div>
</div>
