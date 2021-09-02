<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reviews */
/* @var $form ActiveForm */
?>
<div class="row">
    <div class="col-md-12">
    <?php if( Yii::$app->session->hasFlash('success') ): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('success'); ?>
    </div>
<?php endif;?>
    </div>
</div>
<div class="modules-admin-views-page-add-rivwers">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'text') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'age') ?>
        <?= $form->field($model, 'city') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- modules-admin-views-page-add-rivwers -->
