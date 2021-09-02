<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\widgets\AdminMenu;
use yii\widgets\ActiveForm;


$this->title =$model->name.' '.$model->surname;
$this->params['breadcrumbs'][] = ['label' => 'Пользаватели', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name.' '.$model->surname, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-update">
	<ul class="breadcrams">
		<li>Пользаватели /</li>						
		<li><?= $model->name.' '.$model->surname?> </li>						
	</ul>
	<p class="cabinet_upd"><?= Html::encode($this->title) ?><span class="ff">Личность потверждена</span></p>
	
	<?php $form = ActiveForm::begin(); ?>
	<div class="user-form">
		<div class="row">
			<div class="col-md-12 mt-5">
				<p class="cabinet_upd">Личные данные</p>
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($model, 'patronymic')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($model, 'created_at')->textInput(['value' => date('Y/m/d H:s', $model->created_at),'maxlength' => true]) ?>    
			</div>

			<div class="col-md-4 mt-4">
				<?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-4 mt-4">
				<?= $form->field($model, 'emai')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-4 mt-4">
				<?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-2 mt-4">
				<label for="">Пол</label>
				<?= $form->field($model, 'sex')->dropDownList([ 1 => 'Мужской', 2 => 'Женский', ], ['prompt' => ''])->label(false) ?>    
			</div>

			<div class="col-md-3 mt-4">
				<label for="">Дата изменения</label>
				<?= $form->field($model, 'updated_at')->textInput(['value' => date('Y/m/d H:s', $model->updated_at), 'maxlength' => true])->label(false) ?>    
			</div>
			<div class="col-md-12 mt-4">
				<hr>    
			</div>


			<div class="col-md-12 mt-5">
				<p class="cabinet_upd">Паспортные данные</p>
			</div>
			<div class="col-md-2 mt-4">
				<?= $form->field($userParam, 'seria')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-2 mt-4">
				<?= $form->field($userParam, 'numer')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-2 mt-4">
				<label for="">Подразделения</label>
				<?= $form->field($userParam, 'cod')->textInput(['maxlength' => true])->label(false) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userParam, 'issue')->textInput(['maxlength' => true]) ?>    
			</div>

			<div class="col-md-3 mt-4">
				<?= $form->field($userParam, 'data_issue')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userParam, 'year_birth')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userParam, 'place_birth')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-12">
				
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userParam, 'region')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userParam, 'city')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userParam, 'street')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userParam, 'house')->textInput(['maxlength' => true]) ?>    
			</div>


			<div class="col-md-3 mt-4">
				<?= $form->field($userParam, 'appartament')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userParam, 'corpus')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userParam, 'bilding')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userParam, 'post_code')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userParam, 'fact_region')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userParam, 'fact_city')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userParam, 'fact_street')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userParam, 'fact_house')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4"> 
				<?= $form->field($userParam, 'fact_appartament')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userParam, 'fact_corpus')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userParam, 'fact_bilding')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userParam, 'fact_post_code')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-12 mt-4">
				<hr>
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userInfo, 'name_org')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userInfo, 'inn_org')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userInfo,  'phone_org')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userInfo,  'dol_org')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userInfo,  'staj_org')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userInfo,  'dohod')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userInfo,  'obrazov')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userInfo,  'familia_stat')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userInfo,  'col_ijdev')->textInput(['maxlength' => true]) ?>    
			</div>
			<div class="col-md-3 mt-4">
				<?= $form->field($userInfo,  'car_license')->textInput(['maxlength' => true]) ?>    
			</div>

			<div class="col-md-12 mt-4">
				<hr>
			</div>
			<div class="col-md-12 mt-4">
				<div class="form-group">
					<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
				</div>        
			</div>
		</div>
		<?php ActiveForm::end(); ?>
	</div>
</div>				

