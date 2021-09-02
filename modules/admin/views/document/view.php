<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DocumentPage */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Document Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="document-page-view">
<div class="row">
        <div class="col-md-12">
            <ul class="breadcrams">
                <li><a href="/admin">Главная</a> /</li>                     
                <li><a href="/admin/document">Документы</a> /</li>                     
                <li><?= $this->title?> </li>                        
            </ul>
            <p class="cabinet_upd"><?= Html::encode($this->title) ?></p>
        </div>


<div class="col-md-3">
    <p><?= Html::a('Обнавить', ['update', 'id' => $model->id], ['class' => 'pur_link mt-34']) ?></p>
</div>
<div class="col-md-3">
    <p>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'pur_link mt-34',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?></p>
</div>
<div class="col-md-12 mt-3">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'attribute' => 'img',
                'format' => 'raw',
                'value' => function($model){
                    return '<a  target="_blank" href="/docs/'.$model->img.'">'.$model->name.'</a>';
                }
            ],
            [
                'attribute' =>'date',
                'format' => 'raw',
                'value' => function($model){
                    return date('Y/m/d H:s', $model->date);
                }
            ],
            //'date:date',
        ],
    ]) ?>
</div>
</div>
</div>