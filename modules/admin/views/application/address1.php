<div class="col-md-4 mt-3">
        <label for="">Тип "1"- адрес регистрации "2"- фактический адреса</label>
        <input type="text" value="1" class="form-control" name="Address[address_type]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">наименование страны </label>
        <input type="text" value="Российская Федерация" class="form-control" name="Address[country]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Тип региона</label>
        <input type="text" value="обл" class="form-control" name="Address[region_type]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Регион</label>
        <input type="text" value="<?= $user_param->region?>" class="form-control" name="Address[region]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Тип района</label>
        <input type="text" value="р-н" class="form-control" name="Address[district_type]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Наименование района</label>
        <input type="text" value="" class="form-control" name="Address[district]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Тип города </label>
        <input type="text" value="г" class="form-control" name="Address[town_type]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">город</label>
        <input type="text" value="<?= $user_param->city?>" class="form-control" name="Address[town]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Тип населенного пункта</label>
        <input type="text" value="" class="form-control" name="Address[settlement_type]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Наименование населенного пункта</label>
        <input type="text" value="" class="form-control" name="Address[settlement]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Наименование улицы</label>
        <input type="text" value="<?= $user_param->street?>" class="form-control" name="Address[street]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Тип улицы например, "ул" - улица</label>
        <input type="text" value="ул" class="form-control" name="Address[street_type]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Дом</label>
        <input type="text" value="<?= $user_param->house?>" class="form-control" name="Address[house]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Строение</label>
        <input type="text" value="<?= $user_param->bilding?>" class="form-control" name="Address[construction]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Корпус</label>
        <input type="text" value="<?= $user_param->corpus?>" class="form-control" name="Address[building]">
    </div>
    <div class="col-md-4 mt-3">
        <label for="">Квартира</label>
        <input type="text" value="<?= $user_param->appartament?>" class="form-control" name="Address[flat]">
    </div>
    <div class="col-md-4 mt-3">
        <label for=""> Офис</label>
        <input type="text" value="" class="form-control" name="Address[office]">
    </div>
    <div class="col-md-4 mt-3">
        <label for=""> Владение</label>
        <input type="text" value="" class="form-control" name="Address[estate]">
    </div>
    <div class="col-md-4 mt-3">
        <label for=""> Индекс</label>
        <input type="text" value="<?= $user_param->post_code?>" class="form-control" name="Address[postcode]">
    </div>