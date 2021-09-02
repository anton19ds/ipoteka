<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>
<? $form = ActiveForm::begin([
    'id' => 'form_send',
]); ?>
<div class="row">
<div class="col-md-12">
        <h2>Отправка заявки на Абсолют</h2>
    </div>

    <div class="col-md-12">
        <p>Данные заявителя</p>
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Способ подтверждения дохода</label>
        <select name="calculation[proof_of_income]" id="" class="form-control">
            <option value="ndfl2">ndfl2</option>
            <option value="ndfl3">ndfl3</option>
            <option value="no_proof_employee">no_proof_employee</option>
            <option value="bank_form">bank_form</option>
            <option value="no_proof_self_employed">no_proof_self_employed</option>
        </select>
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Тип страхования</label>
        <select name="calculation[insurance_scheme]" id="" class="form-control">
            <option value="collective">Коллективная</option>
            <option value="agent">Агентская</option>
        </select>
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Тип кредита</label>
        <select name="calculation[credit_type]" id="" class="form-control">
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
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Тип объекта</label>
        <select name="calculation[apartment_type]" id="" class="form-control">
            <option value="townhouse">townhouse</option>
            <option value="apartment">apartment</option>
            <option value="commercial">commercial</option>
            <option value="house_with_land">house_with_land</option>
        </select>
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Тип клиента</label>
        <select name="calculation[customer_type]" id="" class="form-control">
            <option value="townhouse">employee</option>
            <option value="self_emoloyee">self_emoloyee</option>
        </select>
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Срок кредита в мес</label>
        <input type="text" name="calculation[credit_term]" value="" class="form-control" required>
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Сумма первоначального взноса в копейках</label>
        <input type="text" name="calculation[initial_fee]" value="" class="form-control" required>
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Стоимость объекта в копейках</label>
        <input type="text" name="calculation[apartment_price]" value="" class="form-control" required>
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Сумма кредита в копейках</label>
        <input type="text" name="calculation[credit_amount]" value="" class="form-control" required>
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Есть материнский капитал</label>
        <select name="calculation[has_maternal_capital]" id="" class="form-control" required>
            <option value="">------</option>
            <option value="true">Да</option>
            <option value="false">Нет</option>
        </select>
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Комментарий к заявке</label>
        <input type="text" name="calculation[comment]" value="" class="form-control">
    </div>
    <div class="col-md-12">
        <hr>
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Роль клиента</label>
        <select name="general_information[person_type]" id="" class="form-control">
            <option value="borrower">borrower</option>
            <option value="coborrower">coborrower</option>
            <option value="guarantor">guarantor</option>
        </select>
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Фамилия</label>
        <input type="text" name="general_information[surname]" value="<?= $user->surname?>" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Имя</label>
        <input type="text" name="general_information[name]" value="<?= $user->name?>" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Отчество</label>
        <input type="text" name="general_information[patronymic]" value="<?= $user->patronymic?>" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">email</label>
        <input type="text" name="general_information[email]" value="<?= $user->emai?>" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">ИНН</label>
        <input type="text" name="general_information[tax_number]" value="" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">СНИЛС</label>
        <input type="text" name="general_information[insurance_number]" value="" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Номер телефона клиента</label>
        <input type="text" name="general_information[mobile_phones]" value="<?= $user->phone?>" class="form-control">
    </div>
    <div class="col-md-12">
        <hr>
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Серия</label>
        <input type="text" name="current_passport[series]" value="<?= $zakPassport['0']?>" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Номер</label>
        <input type="text" name="current_passport[number]" value="<?= $zakPassport['1']?>" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Дата рождения</label>
        <input type="text" name="current_passport[birthday]" value="<?= $userParam->year_birth?>" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Дата выдачи</label>
        <input type="text" name="current_passport[issued_at]" value="<?= $userParam->data_issue?>" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Пол</label>
        <input type="text" name="current_passport[gender_cid]" value="<? if($user->sex == "1"){ echo 'male'; }else{ echo 'female'; }?>" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Место рождения</label>
        <input type="text" name="current_passport[birth_place]" value="<?= $userParam->place_birth?>" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Код подразделения</label>
        <input type="text" name="current_passport[issuer_code]" value="<?= $userParam->cod?>" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Отделение выдачи</label>
        <input type="text" name="current_passport[issued_by_name]" value="<?= $userParam->issue?>" class="form-control">
    </div>
    <div class="col-md-12">
        <hr>
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Адрес регистрации</label>
        <input type="text" name="additional_information[registration_address]" value="<?= $userParam->region?> <?= $userParam->city?> <?= $userParam->street?> <?= $userParam->house?> <?= $userParam->appartament?> <?= $userParam->corpus?> <?= $userParam->bilding?> <?= $userParam->post_code?>" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Фактический адрес</label>
        <input type="text" name="additional_information[actual_address]" value="<?= $userParam->fact_region?> <?= $userParam->fact_city?> <?= $userParam->fact_street?> <?= $userParam->fact_house?> <?= $userParam->fact_appartament?> <?= $userParam->fact_corpus?> <?= $userParam->fact_bilding?> <?= $userParam->fact_post_code?>" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Основание проживания</label>
        <select name="additional_information[reason_for_living]" class="form-control">
            <option value="rent">rent</option>
            <option value="accommodation_with_relatives">accommodation_with_relatives</option>
            <option value="property">property</option>
            <option value="other">other</option>
        </select>
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Семейное положение</label>
        <select name="additional_information[family_cid]" class="form-control">
            <option value="single">single</option>
            <option value="married">married</option>
            <option value="civil_marriage">civil_marriage</option>
            <option value="widowed">widowed</option>
            <option value="divorced">divorced</option>
        </select>
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Образование</label>
        <select name="additional_information[education_cid]" class="form-control">
            <option value="below">below</option>
            <option value="secondary">secondary</option>
            <option value="incomplete_higher">incomplete_higher</option>
            <option value="specialized_secondary">specialized_secondary</option>
            <option value="higher">higher</option>
            <option value="academic_degree">academic_degree</option>
        </select>
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Количество несовершеннолетних детей</label>
        <input type="text" name="additional_information[children_count]" value="" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Общий трудовой стаж</label>
        <input type="text" name="additional_information[total_seniority]" value="<?$userInfo->staj_org?>" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Предыдущая фамилия</label>
        <input type="text" name="additional_information[previous_surname]" value="" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Предыдущее имя</label>
        <input type="text" name="additional_information[previous_name]" value="" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Предыдущая отчество</label>
        <input type="text" name="additional_information[previous_patronymic]" value="" class="form-control">
    </div>
    <div class="col-md-12">
        <hr>
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Название основной работы</label>
        <input type="text" name="main_job[title]" value='<?= $userInfo->name_org?>' class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">ИНН работодателя</label>
        <input type="text" name="main_job[tax_number]" value="<?= $userInfo->inn_org?>" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Рабочие телефоны</label>
        <input type="text" name="main_job[phones]" value="<?= $userInfo->phone_org?>" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Должность</label>
        <input type="text" name="main_job[position]" value="<?= $userInfo->dol_org?>" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Вид занятости</label>
        <select name="main_job[customer_type]" id="" class="form-control">
            <option value="owner">owner</option>
            <option value="employee">employee</option>
            <option value="individual_entrepreneur">individual_entrepreneur</option>
            <option value="lawyer">lawyer</option>
            <option value="notary">notary</option>
        </select>
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Факт. адрес организации</label>
        <input type="text" name="main_job[actual_address]" value="" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Стаж на текущием месте работы</label>
        <input type="text" name="main_job[experience_cid]" value="" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Заявленный доход в месяц</label>
        <input type="text" name="main_job[monthly_salary]" value="<?= $userInfo->dohod?>" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Подтвержденн ый доход в месяц</label>
        <input type="text" name="main_job[proof_of_income_salary]" value="" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Дата устройства на работу</label>
        <input type="text" name="main_job[date_of_employment]" value="" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Количество сотрудников</label>
        <input type="text" name="main_job[employees_count]" value="" class="form-control">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Доля в бизнесе</label>
        <input type="text" name="main_job[business_share]" value="" class="form-control">
    </div>
    <div class="col-md-12">
        <hr>
    </div>
    <div class="col-md-12 mt-5">
        <button type="submit" class="pur_link btn_pur">Отправить</button>
    </div>
</div>
<? ActiveForm::end(); ?>
<!-- <pre>
    
</pre> -->