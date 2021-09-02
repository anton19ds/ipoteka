<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin(); ?>
<div class="user-form">
    <div class="row">
        <div class="col-md-4 mt-4">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>    
        </div>
        <div class="col-md-4 mt-4">
            <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>    
        </div>
        <div class="col-md-4 mt-4">
            <?= $form->field($model, 'patronymic')->textInput(['maxlength' => true]) ?>    
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
        <div class="col-md-4 mt-4">
            <label for="">Пол</label>
            <?= $form->field($model, 'sex')->dropDownList([ 1 => '1', 2 => '2', ], ['prompt' => ''])->label(false) ?>    
        </div>
        <div class="col-md-4 mt-4">
            <?= $form->field($model, 'created_at')->textInput(['maxlength' => true]) ?>    
        </div>
        <div class="col-md-4 mt-4">
            <?= $form->field($model, 'updated_at')->textInput(['maxlength' => true]) ?>    
        </div>
        <div class="col-md-12 mt-4">
            <hr>    
        </div>
        <div class="col-md-3">
            <?= $form->field($userParam, 'seria')->textInput(['maxlength' => true]) ?>    
        </div>
        <div class="col-md-3">
            <?= $form->field($userParam, 'numer')->textInput(['maxlength' => true]) ?>    
        </div>
        <div class="col-md-3">
            <?= $form->field($userParam, 'cod')->textInput(['maxlength' => true]) ?>    
        </div>
        <div class="col-md-3">
            <?= $form->field($userParam, 'issue')->textInput(['maxlength' => true]) ?>    
        </div>


            
            
            
            
            'data_issue'
            'year_birth'
            'place_birth'
            'region'
            'city'
            'street'
            'house'
            'appartament'
            'corpus'
            'bilding'
            'post_code'
            'fact_region'
            'fact_city'
            'fact_street'
            'fact_house'
            'fact_appartament'
            'fact_corpus'
            'fact_bilding'
            'fact_post_code'
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
