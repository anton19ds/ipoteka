<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>
<? $form = ActiveForm::begin([
    'id' => 'form_send',
]); ?>
<div class="row">
    <? foreach($resylt['calculation'] as $key=>$value):?>

        <div class="col-md-4 mt-3">
            <label for=""><?= $key?></label>
            <? if($key == "proof_of_income"):?>
                <select name="calculation[<?= $key?>]" id="" class="form-control">
                    <option value="ndfl2">ndfl2</option>
                    <option value="ndfl3">ndfl3</option>
                    <option value="no_proof_employee">no_proof_employee</option>
                    <option value="bank_form">bank_form</option>
                    <option value="no_proof_self_employed">no_proof_self_employed</option>
                </select>
            <? elseif($key == "insurance_scheme"):?>    
                <select name="calculation[<?= $key?>]" id="" class="form-control">
                    <option value="collective">Коллективная</option>
                    <option value="agent">Агентская</option>
                </select>
            <? elseif($key == "credit_type"):?>
                <select name="calculation[<?= $key?>]" id="" class="form-control">
                    <option value="mortgage_new">Первичный рынок</option>
                    <option value="mortgage_secondary">Стандарт</option>
                    <option value="apartment_new">Апартаменты Первичный рынок</option>
                    <option value="apartment_secondary">Стандарт Апартаменты</option>
                    <option value="commercial_mortgage_new">Первичка коммерческая ипотека</option>
                    <option value="commercial_mortgage">Вторичка коммерческая ипотека</option>
                    <option value="parking_place_new">Машино-место Первичный рынок</option>
                    <option value="parking_place">Машино-место</option>
                    <option value="family_mortgage_new">Первичка семейная ипотека</option>
                </select>
            <? elseif($key == "apartment_type"):?>
                <select name="calculation[<?= $key?>]" id="" class="form-control">
                    <option value="townhouse">townhouse</option>
                    <option value="apartment">apartment</option>
                    <option value="commercial">commercial</option>
                    <option value="house_with_land">house_with_land</option>
                </select>
            <? elseif($key == "customer_type"):?>
                <select name="calculation[<?= $key?>]" id="" class="form-control">
                    <option value="townhouse">employee</option>
                    <option value="self_emoloyee">self_emoloyee</option>
                </select>
            <? elseif($key == "has_maternal_capital"):?>
                <select name="calculation[<?= $key?>]" id="" class="form-control">
                    <option value="true">Да</option>
                    <option value="false">Нет</option>
                </select>
            <? else: ?>    
                <input type="text" name="calculation[<?= $key?>]" value="<?= $value?>" class="form-control">
            <? endif;?>
        </div>
    <? endforeach;?>
    <div class="col-md-12">
        <hr>
    </div>
    <? foreach($resylt["people"]["general_information"] as $key => $item):?>

        <div class="col-md-4 mt-3">
            <? if($key == "mobile_phones"):?>
                <label for=""><?= $key?></label>
                <input type="text" name="general_information[<?= $key?>]" value="" class="form-control">
            <? elseif($key == "person_type"):?>
                <label for=""><?= $key?></label>
                <select name="general_information[<?= $key?>]" id="" class="form-control">
                    <option value="borrower">borrower</option>
                    <option value="coborrower">coborrower</option>
                    <option value="guarantor">guarantor</option>
                    , , 
                </select>
            <? else:?>
                <label for=""><?= $key?></label>
                <input type="text" name="general_information[<?= $key?>]" value="<?= $item?>" class="form-control">
            <? endif;?>
        </div>
    <? endforeach;?>
    <div class="col-md-12">
        <hr>
    </div>

<? foreach($resylt["people"]["current_passport"] as $key => $item):?>
<div class="col-md-4 mt-3">
        <label for=""><?= $key?></label>
        <input type="text" name="current_passport[<?= $key?>]" value="<?= $item?>" class="form-control">
</div>
<? endforeach;?>
    <div class="col-md-12">
        <hr>
    </div>
    <? foreach($resylt["people"]["additional_information"] as $key => $item):?>
<div class="col-md-4 mt-3">
        <label for=""><?= $key?></label>
        <input type="text" name="additional_information[<?= $key?>]" value="<?= $item?>" class="form-control">
</div>
<? endforeach;?>
<div class="col-md-12">
    <hr>
</div>
<? foreach($resylt["people"]["main_job"] as $key => $item):?>
    <div class="col-md-4 mt-3">
            <? if($key == "phones"):?>
                <label for=""><?= $key?></label>
                <input type="text" name="main_job[<?= $key?>]" value="" class="form-control">
            <? elseif($key == "customer_type"):?>
                <label for=""><?= $key?></label>
                <select name="main_job[<?= $key?>]" id="" class="form-control">
                    <option value="owner">owner</option>
                    <option value="employee">employee</option>
                    <option value="individual_entrepreneur">individual_entrepreneur</option>
                    <option value="lawyer">lawyer</option>
                    <option value="notary">notary</option>
                </select>
            <? else:?>
                <label for=""><?= $key?></label>
                <input type="text" name="main_job[<?= $key?>]" value="<?= $item?>" class="form-control">
            <? endif;?>
        </div>

<? endforeach;?>
<div class="col-md-12">
    <hr>
</div>
<div class="col-md-12 mt-5">
        <?= Html::submitButton('Отправить',["class" => "pur_link btn_pur"])?>
    </div>
</div>
<? ActiveForm::end(); ?>
<!-- <pre>
    
</pre> -->
