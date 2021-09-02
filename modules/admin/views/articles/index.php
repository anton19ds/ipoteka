<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\widgets\AdminMenu;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Статьи';
$this->params['breadcrumbs'][] = $this->title;
?>
<ul class="breadcrams">
    <li>Главная /</li>                     
    <li><?= $this->title?> </li>                        
</ul>
<p class="cabinet_upd"><?= Html::encode($this->title) ?></p>
<p>
    <?= Html::a('Добавить Статью', ['create'], ['class' => 'pur_link mt-34']) ?>
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
        [
            'attribute' => 'date',
            'content' => function($model){
                return date('Y/d/m H:s', $model->date);
            }
        ],
        [
            'attribute' => 'Опубликована',
            'content' => function($model){
                return ($model->statys == '0'? "Нет" : "Да");
            }
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view}',
                            //'header' => 'В закупку',
            'buttons' => [
                'view' => function ($url, $model, $key){
                    return $this->render('/articles/actives',[
                        'model' => $model
                    ]);
                },
            ]
        ],
    ],
]); ?>                
</div>
<? $this->registerJs("
    $('.active_click').on('click', function(e){
        var id = $(this).data('id');
        var elem = '.user_'+id;
        if($(elem).hasClass('open')){
            $(elem).removeClass('open');    
            }else{
                $(elem).addClass('open');    
    }
    }); 
");?>