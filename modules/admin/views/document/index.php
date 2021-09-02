<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Правовая Информация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="document-page-index">
        <div class="col-md-12">
            <ul class="breadcrams">
                <li>Главная /</li>                     
                <li><?= $this->title?> </li>                        
            </ul>
            <p class="cabinet_upd"><?= Html::encode($this->title) ?></p>
            <p class="mt-3">
                <?= Html::a('Добавить документы', ['create'], ['class' => 'pur_link mt-34']) ?>
            </p>
        </div>
        <div class="col-md-12 mt-4">


            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'tableOptions' => [
                    'class' => '',
                ],
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'name',
                    [
                        'attribute' => 'img',
                        'format' => 'raw',
                        'value' => function($model){
                            if(!empty($model->img)){
                                return '<a  target="_blank" href="/docs/'.$model->img.'">'.$model->name.'</a>';
                            }else{
                                return 'Документ не загружен';
                            }

                        }
                    ],
                    [
                        'attribute' =>'date',
                        'format' => 'raw',
                        'value' => function($model){
                            return date('Y/m/d H:s', $model->date);
                        }
                    ],
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{view}',
                            //'header' => 'В закупку',
                        'buttons' => [
                            'view' => function ($url, $model, $key){
                                return $this->render('/document/actives',[
                                    'model' => $model
                                ]);
                            },
                        ]
                    ],
                ],
            ]); ?>
        </div>

    </div>
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