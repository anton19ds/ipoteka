<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Вакансия';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
<ul class="breadcrams">
    <li>Главная /</li>                     
    <li><?= $this->title?> </li>                        
</ul>
<p class="cabinet_upd"><?= Html::encode($this->title) ?></p>
<div class="career-index">
<p>
    <?= Html::a('Добавить Вакансию', ['create'], ['class' => 'pur_link mt-34']) ?>
</p>
<div class="col-md-12 mt-5">
    


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'tableOptions' => [
            'class' => '',
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'duties',
            'demand',
            'dop',
            'city',
            //'date',
            'statys',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
</div>
</div>