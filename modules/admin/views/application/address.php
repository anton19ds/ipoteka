<div class="col-md-4 mt-3">
        <label for="">Тип "1"- адрес регистрации "2"- фактический адреса</label>
        <input type="text" value="2" class="form-control" name="Address2[address_type]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">наименование страны </label>
        <input type="text" value="Российская Федерация" class="form-control" name="Address2[country]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Тип региона</label>
        <input type="text" value="обл" class="form-control" name="Address2[region_type]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Регион</label>
        <input type="text" value="<?= $user_param->fact_region?>" class="form-control" name="Address2[region]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Тип района</label>
        <input type="text" value="р-н" class="form-control" name="Address2[district_type]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Наименование района</label>
        <input type="text" value="" class="form-control" name="Address2[district]">
    </div>
    
    <div class="col-md-4 mt-3">
        <label for="">Тип города </label>
        <input type="text" value="г" class="form-control" name="Address2[town_type]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">город</label>
        <input type="text" value="<?= $user_param->fact_city?>" class="form-control" name="Address2[town]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Тип населенного пункта</label>
        <input type="text" value="" class="form-control" name="Address2[settlement_type]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Наименование населенного пункта</label>
        <input type="text" value="" class="form-control" name="Address2[settlement]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Наименование улицы</label>
        <input type="text" value="<?= $user_param->fact_street?>" class="form-control" name="Address2[street]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Тип улицы например, "ул" - улица</label>
        <input type="text" value="ул" class="form-control" name="Address2[street_type]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Дом</label>
        <input type="text" value="<?= $user_param->fact_house?>" class="form-control" name="Address2[house]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Строение</label>
        <input type="text" value="<?= $user_param->fact_bilding?>" class="form-control" name="Address2[construction]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Корпус</label>
        <input type="text" value="<?= $user_param->fact_corpus?>" class="form-control" name="Address2[building]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Квартира</label>
        <input type="text" value="<?= $user_param->fact_appartament?>" class="form-control" name="Address2[flat]">
    </div>
    <div class="col-md-4 mt-3">
        <label for=""> Офис</label>
        <input type="text" value="" class="form-control" name="Address2[office]">
    </div>
    <div class="col-md-4 mt-3">
        <label for=""> Владение</label>
        <input type="text" value="" class="form-control" name="Address2[estate]">
    </div>
    <div class="col-md-4 mt-3">
        <label for=""> Индекс</label>
        <input type="text" value="<?= $user_param->fact_post_code?>" class="form-control" name="Address2[postcode]">
    </div>