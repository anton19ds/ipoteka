<? if(!empty($model->phone)):?>
<div class="col-md-4">
        <label for="">Тип средства связи (Телефон)</label>
        <input name="Phone[comm_type_id]"  class="form-control" value="2">
    </div>

    <div class="col-md-4">
        <label for="">номер телефона</label>
        <input type="text" value="<?= $model->phone?>" name='Phone[comm_string]' class="form-control">
    </div>
<? endif;?>
<div class="col-md-12">
    <hr>
</div>
<? if(!empty($model->emai)):?>
<div class="col-md-4">
        <label for="">Тип средства связи (Email)</label>
        <input name="Email[comm_type_id]" class="form-control" value="3">
    </div>

    <div class="col-md-4">
        <label for="">Почта</label>
        <input type="text" value="<?= $model->emai?>" name='Email[comm_string]' class="form-control">
    </div>
<? endif;?>