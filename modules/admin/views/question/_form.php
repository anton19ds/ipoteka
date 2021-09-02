<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;

?>

<div class="question-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-12">
            <label for="" class="mb-3">Заголовок</label>
            <?= $form->field($model, 'title')->textInput(['maxlength' => true])->label(false) ?>
        </div>
        <div class="col-md-12 mt-5">
            
            <?= $form->field($model, 'text')->widget(Widget::className(), [
                'settings' => [
                    'lang' => 'ru',
                    'minHeight' => 200,
                    'plugins' => [
                        'clips',
                        'fullscreen',
                    ],
                ],
            ])->label(false);
            ?>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['class' => 'pur_link btn_pur']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
