<?
    use yii\grid\GridView;
?>
<div class="row">
    <div class="col-md-12">
        <a href="/admin/page/gelery-add" class="pur_link btn_pur">Добавить Изображение</a>
    </div>
    <div class="col-md-12 mt-5">
        <? if(!empty($models)):?>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'title',
                    'date',
                    [
                        'attribute' => 'image',
                        'format' => 'raw',
                        'value' => function($model){
                            return "<img src='".$model->image."'>";
                        }
                    ],
                    [
                        'attribute' => 'Действие',
                        'format' => 'raw',
                        'value' => function($model){
                            return "<a class='fle_d' href='/admin/page/user-view?id=".$model->id."'>Править</a> <a class='fle_d' href='/admin/page/delete-user?id=".$model->id."'>Удалить</a>";
                        }
                    ]
                ],
            ]) ?>
        <? endif;?>
    </div>
</div>