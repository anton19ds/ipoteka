<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocumentPage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="document-page-form">
	<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
<div class="col-md-12 mt-5">
	<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-md-12 mt-5">
	<?= $form->field($model, 'img')->fileInput()->label(false) ?>	
</div>
    

    

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'pur_link mt-34']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
