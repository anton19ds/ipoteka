<?
use yii\grid\GridView;
?>
<div class="row">
    <div class="col-md-12">
        <h2> Отправленые данные</h2>
    </div>
    <div class="col-md-12">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Параметр</th>
      <th scope="col">Значение</th>
    </tr>
  </thead>
  <tbody>
  <? $i = '1';?>
  <? foreach($massivArr['calculation'] as $key => $item):?>
    <tr>
      <th scope="row"><?=$i?></th>
      <td><?= strtr( $key, $trest)?></td>
      <td><?= $item?></td>
    </tr>
    <? $i++;?>
    <? endforeach;?>
  </tbody>
</table>
    </div>
<div class="col-md-12">
    <hr>
</div>
    
    <div class="col-md-12">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Параметр</th>
      <th scope="col">Значение</th>
    </tr>
  </thead>
  <tbody>
  <? $i = '1';?>
  <? foreach($massivArr['people']['general_information'] as $key => $value):?>
    <tr>
      <th scope="row"><?=$i?></th>
      <td><?= $key?></td>
      <td>
      <? if($key == 'mobile_phones'):?>
            <?= $value[0]?>
        <? else:?>
            <?= $value;?>
        <? endif;?>
        </td>
    </tr>
    <? $i++;?>
    <? endforeach;?>
  </tbody>
</table>
    </div>
<div class="col-md-12">
    <hr>
</div>



<div class="col-md-12">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Параметр</th>
      <th scope="col">Значение</th>
    </tr>
  </thead>
  <tbody>
  <? $i = '1';?>
  <? foreach($massivArr['people']['current_passport'] as $key => $value):?>
    <tr>
      <th scope="row"><?=$i?></th>
      <td><?= $key?></td>
      <td><?= $value;?></td>
    </tr>
    <? $i++;?>
    <? endforeach;?>
  </tbody>
</table>
    </div>
<div class="col-md-12">
    <hr>
</div>

<div class="col-md-12">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Параметр</th>
      <th scope="col">Значение</th>
    </tr>
  </thead>
  <tbody>
  <? $i = '1';?>
  <? foreach($massivArr['people']['additional_information'] as $key => $value):?>
    <tr>
      <th scope="row"><?=$i?></th>
      <td><?= $key?></td>
      <? if($key == 'mobile_phones'):?>
        <td><?= $value[0]?></td>
        <? else:?>
            <td><?= $value;?></td>
        <? endif;?>
    </tr>
    <? $i++;?>
    <? endforeach;?>
  </tbody>
</table>
    </div>




    <div class="col-md-12">
    <hr>
</div>



<div class="col-md-12">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Параметр</th>
      <th scope="col">Значение</th>
    </tr>
  </thead>
  <tbody>
  <? $i = '1';?>
  <? foreach($massivArr['people']['main_job'] as $key => $value):?>
    <tr>
      <th scope="row"><?=$i?></th>
      <td><?= $key?></td>
      <? if($key == 'phones'):?>
        <td><?= $value[0]?></td>
        <? else:?>
            <td><?= $value;?></td>
        <? endif;?>
    </tr>
    <? $i++;?>
    <? endforeach;?>
  </tbody>
</table>
    </div>

    <div class="col-md-12 mt-3">
    <a href="" class="pur_link btn_pur" id="addDocument">Прикрепить документ</a>
    <input type="file" class="sendFiles" style="display:none;">
    </div>

    <div class="col-md-12 mt-5">
    <a href="" class="pur_link btn_pur">Запрос статуса заявки</a>
    </div>
</div>



