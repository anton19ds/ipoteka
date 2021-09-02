<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\widgets\AdminMenu;

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'tableOptions' => [
                        'class' => ''
                    ],
                    'columns' => [
                        'id',
                        //['class' => 'yii\grid\SerialColumn'],

                        [
                            'attribute' => 'Ф.И.О',
                            'content' => function($model){
                                return $model->surname.' '.$model->name.' '.$model->patronymic;
                            }
                        ],
                        
                        //'username',
                        //'password',
                        'phone',
                        'emai',
            //'date',
            //'authKey',
            //'accessToken',
            //'name',
            //'surname',
            //'patronymic',
            //'sex',
            
            [
                'attribute' => 'created_at',
                'value' => function($model){
                    return date("Y/m/d H:i", $model->created_at);
                }    
            ],
            //'updated_at',
            //'role',
                        [
                            'class' => 'yii\grid\ActionColumn',
                            'template' => '{view}',
                            //'header' => 'В закупку',
                            'buttons' => [
                                'view' => function ($url, $model, $key){
                                    return $this->render('/user/active',[
                                        'model' => $model
                                    ]);
                                },
                            ]
                        ],
                       // ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
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