<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<div class="row">
    <div class="col-md-12">
        <h1>Запрос ФССП</h1>
    </div>

    <? $form = ActiveForm::begin([
        'id' => 'fs-form'
    ])?>
    <div class="row">
        <div class="col-md-12 mt-3">
            <label for="">Укажите регион заявителя</label>
            <select name="region" class="form-control" required>
                <option value="">---------</option>
                <? foreach($regions as $key):?>
                <option value="<?= $key->KOD_region?>">
                    (<?= $key->KOD_region?>) <?= $key->NAME_region?>
                </option>
                <? endforeach;?>
            </select>
        </div>
        <div class="col-md-12 mt-3">
            <label for="">Имя</label>
            <input type="text" value="<?= $model->name;?>" class="form-control" name="firstname">
        </div>
        <div class="col-md-12 mt-3">
            <label for="">Фамилия</label>
            <input type="text" value="<?= $model->surname;?>" class="form-control"  name="lastname" required>
        </div>
        <div class="col-md-12 mt-3">
            <label for="">Отчество</label>
            <input type="text" value="<?= $model->patronymic;?>" class="form-control" name="secondname" required>
        </div>
        <div class="col-md-12 mt-3">
            <label for="">День рождения</label>
            <?php
            if(!empty($userParam->year_birth)){
                $dateTs = new \DateTime($userParam->year_birth);
                $setR = $dateTs->format('d.m.Y');
            }else{
                $setR = null;
            }
                
            ?>
                
            <input type="text" value="<?= $setR;?>" class="form-control" name="birthdate" required>
        </div>
        <div class="col-md-12 mt-3">
            <label for="">Город проживания</label>
            <? if(!empty($userParam->fact_city)):?>
            <input type="text" value="<?= $userParam->fact_city;?>" class="form-control" required>
            <? else:?>
                <? if(!empty($userParam->city)):?>
                <input type="text" value="<?= $userParam->city;?>" class="form-control" required>
                    <? else:?>
                    <input type="text" value="" class="form-control">
                    <? endif;?>
            <? endif;?>
        </div>
        <div class="col-md-12 mt-3">
            <label for="">ID Запроса ФССП</label>
            <input type="text" name="task" value="<?= $task?>" class="form-control" >
        </div>
        <div class="col-md-12 mt-5">
            <?= Html::submitButton('Отправить',['class' => 'pur_link btn_pur'])?>
        </div>
    </div>
    <? ActiveForm::end();?>
    <div class="col-md-12 mt-5 id_fsspRt">
        <? if(!empty($arrts['response']['result'])):?>
            <? foreach($arrts['response']['result'] as $key => $value):?>
                <? if(!empty($value['query']['params'])):?>
                    <ul>
                    <li>Регион - <?= $value['query']['params']['region']?></li>
                    <li>Имя - <?= $value['query']['params']['firstname']?></li>
                    <li>отчество - <?= $value['query']['params']['secondname']?></li>
                    <li>Фамилия<?= $value['query']['params']['lastname']?></li>
                    <li>Дата рождения - <?= $value['query']['params']['birthdate']?></li>
                    </ul>
                <? endif;?>
                <? if(!empty($value['result'])):?>
                    <? foreach($value['result'] as $item => $res):?>
                        <ul>
                            <? if(!empty($res)):?>
                                <? foreach($res as $rrt => $rret):?>
                                    <li><?= $rret;?></li>
                                <? endforeach;?>
                            <? endif;?>
                        </ul>
                    <? endforeach;?>
                    <? else:?>
                        <p>Результатов Нет</p>
                <? endif;?>
            <? endforeach;?>
        <? endif;?>
    </div>
</div>

