<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Страница вопросы и ответы';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="question-index">
<div class="row">
    <div class="col-md-12">
    <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="col-md-12 mt-3">
    <p>
        <?= Html::a('Добавить пункт', ['create'], ['class' => 'pur_link btn_pur']) ?>
    </p>
    </div>
    <div class="col-md-12 mt-5">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'text:ntext',
            'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    </div>

</div>
</div>