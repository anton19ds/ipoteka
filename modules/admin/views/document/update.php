<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocumentPage */

$this->title = 'Редактирование: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Редактирование', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="col-md-12">
	<div class="col-md-12">
            <ul class="breadcrams">
                <li><a href="/admin">Главная</a> /</li>                     
                <li><a href="/admin/document">Документы</a> /</li>                     
                <li><?= $this->title?> </li>                        
            </ul>
            <p class="cabinet_upd"><?= Html::encode($this->title) ?></p>
        </div>
</div>
<div class="document-page-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
