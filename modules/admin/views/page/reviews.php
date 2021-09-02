<?
    use yii\grid\GridView;
?>
<div class="row">
    <div class="col-md-12">
        <a href="/admin/page/riwers-add" class="pur_link btn_pur">Добавить Отзыв</a>
    </div>
    <div class="col-md-12">
    <?php if( Yii::$app->session->hasFlash('success') ): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('success'); ?>
    </div>
<?php endif;?>
    </div>
    <div class="col-md-12 mt-5">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'name',
                    'text',
                    'age',
                    'city',
                    [
                        'attribute' => 'Действие',
                        'format' => 'raw',
                        'value' => function($model){
                            return "<a href='/admin/page/delete-riw?id=".$model->id."'>Удалить</a><br><a href='/admin/page/redactor-riw?id=".$model->id."'>Править</a>";
                        }
                    ],
                ],
            ]) ?>
    </div>
</div>