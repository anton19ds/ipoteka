<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>


        <?php
            $form = ActiveForm::begin([
                'id' => 'setting',
            ]);
        ?>
        <div class="row">
        <div class="col-md-6">
            <label for=""> Email</label>
        </div>
        <div class="col-md-6">
            <label for=""> Phone</label>
        </div>
        <div class="col-md-6 mt-3">
        <?= $form->field($email, 'value',['inputOptions'=>['name' => "email-inp", 'class'=>"form-control"]])->textInput()->label(false); ?>
        </div>
        <div class="col-md-6 mt-3 phone_mask">
        <?= $form->field($phone, 'value',['inputOptions'=>['name' => 'phone-inp', 'class'=>"form-control"]])->textInput()->label(false); ?>
        </div>
        <div class="col-md-6 mt-5">
            <label for="">
                Адрес
            </label>
        </div>
        <div class="col-md-6 mt-5">
            Карта
        </div>
        <div class="col-md-6 mt-3">
        <?= $form->field($address, 'value',['inputOptions'=>['name' => 'address-inp', 'class'=>"form-control"]])->textInput()->label(false); ?>
        </div>
        <div class="col-md-6 mt-3">
        <?= $form->field($map, 'value',['inputOptions'=>['name' => 'map-inp', 'class'=>"form-control"]])->textInput()->label(false); ?>
        </div>
        <div class="col-md-6 mt-5">
            <label for=""> Данные организации</label>
        <?
                echo \vova07\imperavi\Widget::widget([
                    'name' => 'redactor',
                    'value' => $footerData->value,
                    'settings' => [
                        'lang' => 'ru',
                        'minHeight' => 200,
                        'plugins' => [
                            'clips',
                            'fullscreen',
                        ],
                    ],
                ]);
            ?>
        </div>
        <div class="col-md-12 mt-4">
            <?= Html::submitButton('Сохранить',['class' =>'pur_link btn_pur']);?>
        </div>
        
        
        </div>
        <?php ActiveForm::end();?>
