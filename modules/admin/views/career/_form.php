<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Career */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="career-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duties')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'demand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'statys')->dropDownList([ '0'=>'Отключен', '1'=>'Активен', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'pur_link mt-34']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
