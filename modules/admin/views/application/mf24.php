<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>
<? $form = ActiveForm::begin([
    'id' => 'form_send',
]); ?>
<div class="row">
    <div class="col-md-12">
        <h2>Отправка заявки на Ипотека 24, Banki.ru</h2>
    </div>

    <div class="col-md-12">
        <p>Данные заявителя</p>
    </div>
    
    <div class="col-md-4 mt-3">
        <label for="">Фамилия</label>
        <input type="text" value="<?= $model->surname?>" name='client_lastname' class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Имя</label>
        <input type="text" value="<?= $model->name?>" name='client_firstname' class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Отчество</label>
        <input type="text" value="<?= $model->patronymic?>" name='client_middlename' class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Сумма кредита</label>
        <input type="text" value="" name='requested_amount' class="form-control"  required="required">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Срок кредита (в мес.)</label>
        <input type="text" value="" name='credit_term' class="form-control"  required="required">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Пол</label>
        <select name="sex" id="" class="form-control">
            <option value="1" <? if($model->sex == '1') echo 'selected="selected"';?> >мужской</option>
            <option value="2" <? if($model->sex == '2') echo 'selected="selected"';?>>женский</option>
        </select>
    </div>

    <div class="col-md-4 mt-3">
        <label for="">Дата рождения</label>
        <input type="data" value="<?= $user_param->year_birth?>" name="birth_date" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Сумма основного дохода</label>
        <input type="text" value="<?= $user_info->dohod?>" name="primary_income" class="form-control">
    </div>
    <div class="col-md-4 mt-3"> 
        <label for="">Совпадения места жительства и регистрации</label>
        <select name="address_equal" id="" class="form-control">
        
        
            <option value="1" <? if($ziipets == '0') echo 'selected="selected"';?>>Совпадает</option>
            <option value="0" <? if($ziipets == '1') echo 'selected="selected"';?>>Не совпадает</option>
        </select>
    </div>




    <div class="col-md-12">
        <hr>
    </div>
    <div class="col-md-12">
        <p>Адреса</p>
    </div>
    <?= $this->render('address1',[
        'user_param' => $user_param
    ]);?>
    <? if($ziipets == "1"):?>
    <div class="col-md-12">
        <hr>
    </div>
<?= $this->render('address',[
        'user_param' => $user_param
    ]);?>
    <? endif;?>








    <div class="col-md-12">
        <hr>
    </div>
    <?= $this->render('comms',[
        'model' => $model
    ])?>
    <div class="col-md-12">
        <hr>
    </div>
    <div class="col-md-4">
        <label for="">Тип документа</label>
        <select name="doc_type_id" id="" class="form-control">
            <option value="21">паспорт (21)</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="">номер</label>
        <input type="text" value="<?= $pass_ser[1]?>" name="number" class="form-control">
    </div>
    <div class="col-md-4">
        <label for="">серия</label>
        <input type="text" value="<?= $pass_ser[0]?>" name="series" class="form-control">
    </div>
    <div class="col-md-4">
        <label for="">дата выдачи</label>
        <input type="text" value="<?= $user_param->data_issue?>" name="date_delivery" class="form-control">
    </div>
    <div class="col-md-4">
        <label for="">кем выдан</label>
        <input type="text" value="<?= $user_param->issue?>" name="who_issues" class="form-control">
    </div>
    <div class="col-md-4">
        <label for="">Код подразделения</label>
        <input type="text" value="<?= $user_param->cod?>" name="division_code" class="form-control">
    </div>
    <div class="col-md-12 mt-5">
        <?= Html::submitButton('Отправить',["class" => "pur_link btn_pur"])?>
    </div>
    
</div>
<? ActiveForm::end();?>

