<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\widgets\AdminMenu;
use mihaildev\ckeditor\CKEditor;
use  yii\bootstrap4\Modal;
use yii\bootstrap4\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->name.' '.$model->surname;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-index">
    <div class="row">
        <div class="col-md-12">
            <?php if( Yii::$app->session->hasFlash('send-success') ): ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo Yii::$app->session->getFlash('send-success'); ?>
                </div>
            <?php endif;?>
        </div>
        <div class="col-md-12">
            <ul class="breadcrams">
                <li><a href="/admin/user">Пользаватели</a> /</li>                     
                <li><?= $model->name.' '.$model->surname?> </li>                        
            </ul>
            <p class="cabinet_upd"><?= Html::encode($this->title) ?><span class="ff">Личность потверждена</span></p>
        </div>
        <div class="col-md-12 mt-3">

            <p>
                <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Заблокировать', ['bloced', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>                    
        </div>
        <div class="col-md-6 mt-5">
            <div class="begun_reit">
                <p>Кредитный рейтинг пользователя</p>
                <div class="cred_reqting">
                    <span></span>
                </div>    
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <p class="title">Личные данные</p>   
        </div>
        <div class="col-md-4">
            <p class="color_label">
                Ф.И.О
            </p>
            <p class="p_load">
                <span class="name_green"><?= $model->surname.'  '.$model->name.'  '.$model->patronymic ;?></span>
            </p>
        </div>
        <div class="col-md-3">
            <p class="color_label">Дата регистрации</p>
            <p class="p_load"><?= date('Y/d/m H:s', $model->created_at)?></p>
        </div>
        <div class="col-md-5"></div>
        <? if(!empty($userParam)):?>
        <div class="col-md-4 mt-4">
            <p class="color_label">
                Ваш ИНН
            </p>
            <p class="p_load">123123123123</p>
        </div>
        <div class="col-md-12 mt-3">
            <p class="title">Паспортные данные</p>
        </div>

        <div class="col-md-2">
            <p class="color_label">
                Номер
            </p>
            <p class="p_load"><?= $userParam->numer?></p>
        </div>
        <div class="col-md-3">
            <p class="color_label">
                Код подразделения
            </p>
            <p class="p_load"><?= $userParam->cod?></p>

        </div>
        <div class="col-md-5">
            <p class="color_label">
                Кем выдан
            </p>
            <p class="p_load"><?= $userParam->issue;?></p>
        </div>


        <div class="col-md-3">
            <p class="color_label">
                Когда выдан
            </p>
            <p class="p_load">
                <?= $userParam->data_issue?>
            </p>
        </div>
        <? endif;?>
        <? if(!empty($userInfo)):?>
        <div class="col-md-12 mt-3">
            <p class="title">Сведения о работе</p>
        </div>
        <div class="col-md-12">
            <p class="title">Место работы</p>
        </div>
        <div class="col-md-4">
            <ul class="height_300">
                <li>
                    <p class="color_label">Выберите тип занятости</p>
                </li>
                <li>
                    <div class="in_bocks in_chek_p min_p" style="margin-top: 14px;">
                        <span id="param3" <?= ($userInfo->rab_type == '1' ? 'class="vek"' : 'class=""');?> ></span>
                        <input type="checkbox">
                        <label for="" style="margin: 0  10px; color: rgba(156, 156, 156, 1);">Работаю по найму</label>
                    </div>
                </li>
                <li>
                    <div class="in_bocks in_chek_p min_p" style="margin-top: 0px;">
                        <span id="param2" <?= ($userInfo->rab_type == '2' ? 'class="vek"' : 'class=""');?> ></span>
                        <input type="checkbox">
                        <label for="" style="margin: 0  10px; color: rgba(156, 156, 156, 1);">Работаю на себя</label>
                    </div>
                </li>
                <li>
                    <div class="in_bocks in_chek_p min_p" style="margin-top: 0px;">
                        <span id="param1" <?= ($userInfo->rab_type == '3' ? 'class="vek"' : 'class=""');?> ></span>
                        <input type="checkbox">
                        <label for="" style="margin: 0  10px; color: rgba(156, 156, 156, 1);">Не работаю</label>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            <p class="color_label">Название организации, где вы работаете</p>
            <p class="p_load"><?= $userInfo->name_org?></p>
        </div>
        <div class="col-md-4 mt-4">
            <p class="color_label">
                Рабочий номер телефона
            </p>
            <p class="p_load">
                <?= $userInfo->phone_org?>
            </p>
        </div>
        <div class="col-md-4 mt-4">
            <p class="color_label">
                Название вашей должности
            </p>
            <p class="p_load">
                <?= $userInfo->dol_org?>
            </p>
        </div>
        <div class="col-md-4 mt-4">
            <p class="color_label">
                Стаж работы в организации
            </p>
            <p class="p_load">
                <?= $userInfo->staj_org?>
            </p>
        </div>
        <div class="col-md-12">
            <p class="title">Дополнительные сведения</p>
        </div>
        <div class="col-md-3">
            <p class="color_label">
                Персональный доход в месяц
            </p>
            <p class="p_load">
                <?= $userInfo->dohod?>
            </p>
        </div>
        <div class="col-md-3">
            <p class="color_label">
                Образование
            </p>
            <p class="p_load">
                <?= $userInfo->obrazov?>
            </p>
        </div>
        <div class="col-md-3">
            <p class="color_label">
                Семейное положение
            </p>
            <p class="p_load">
                <?= $userInfo->familia_stat?>
            </p>
        </div>
        <div class="col-md-3">
            <p class="color_label">
                Количество иждивенцев
            </p>
            <p class="p_load">
                <?= $userInfo->col_ijdev?>
            </p>
        </div>

        <? endif;?>


        <div class="col-md-12 mt-5">
            <p>Загруженные документы</p>
        </div>
        <div class="col-md-10">
            <ul class="document_vid">
            <?php foreach ($loadDocument as $key): ?>
                <li><span><?= $key->name?></span><a href="">Открыть документ</a></li>
            <?php endforeach ?>
            </ul>
        </div>
        <div class="col-md-12 mt-5">
            <a href="" class="pur_link btn_pur" id="zaprosDocunent">Запросить документы</a>
        </div>
        <? if(!empty($listDocZapros)):?>
        <div class="col-md-12 mt-5">
            <ul>
            <? foreach($listDocZapros as $list):?>
                <li class="mt-3">Завка #<?= $list->id;?> Дата отправки <?= date('Y/m/d H:s', $list->date);?>
                    <? if($list->statys == '0'){
                            echo "<span style='color:red'>В обработке</span>";
                        }else{
                        echo "<span style='color:green'>Выполнено</span>";
                        }
                    ?>
                    <a href="" data-id="<?= $list->id?>" class="tekstOP">Текс заявки</a>
                </li>
            <? endforeach;?>
            </ul>
        </div>
        <? endif;?>
        <div class="col-md-12 mt-5">
            <p>Связаться с клиентом</p>
        </div>
        <div class="col-md-6 mt-3">
            <textarea name="" id="textMessegS" placeholder="Ваше сообщение"></textarea>
        </div>
        <div class="col-md-12">
            <a href="" class="pur_link btn_pur" id="sendMesseg" data-id="<?= $id?>">Отправить</a>
        </div>
        <div class="col-md-12 mt-5">
            <a href="/admin/application/index?id=<?= $id?>" class="pur_link btn_pur" id="sendMesseg" data-id="<?= $id?>">Список заявок</a>
        </div>
    </div> 
</div>
<?
    Modal::begin([
        'id' =>'addDocument',
        'size' => 'modal-xl'
    ]);
    ?>
<?
    $form = ActiveForm::begin([
        'id' => 'document-form',
        'options' => ['class' => 'form-horizontal'],

]);
?>
    <h2>
        Отправка сообщения пользавателю на запрос документов
    </h2>
    <?= $form->field($docZapros, 'user_id')->hiddenInput(['value' => $id])->label(false)?>
    <?= $form->field($docZapros, 'user_send')->hiddenInput(['value' => Yii::$app->user->identity->id])->label(false)?>
    <?
        echo $form->field($docZapros, 'text')->widget(CKEditor::className(),[
            'editorOptions' => [
                'preset' => 'basic', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                'inline' => false, //по умолчанию false

            ],
        ]);
    ?>
    <?= Html::submitButton('Отправить',['class' => 'pur_link btn_pur']);?>
    <?
        ActiveForm::end();
    ?>
<?
    Modal::end();
?>



<?
    Modal::begin([
        'id' =>'setDocument',
        'size' => 'modal-xl'
    ]);
?>
<div id="setDoc">

</div>
<?
    Modal::end();
?>
