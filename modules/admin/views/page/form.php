<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmployeesPage */
/* @var $form ActiveForm */
?>
<?php if( Yii::$app->session->hasFlash('success') ): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('success'); ?>
    </div>
<?php endif;?>
<div class="page-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-12">
        <?= $form->field($model, 'description') ?>
        </div>
        <div class="col-md-12 mt-3">
        <?= $form->field($model, 'position') ?>
        </div>
        <div class="col-md-12 mt-3">
        <?= $form->field($model, 'name') ?>
        </div>
        <div class="col-md-12 mt-3">
        <?= $form->field($model, 'imageFile')->fileInput(); ?>
        </div>
        <div class="col-md-12 mt-3">
        <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
        </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- page-form -->
