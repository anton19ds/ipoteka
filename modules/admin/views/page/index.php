<?
    use yii\widgets\ActiveForm;
    use vova07\imperavi\Widget;
    use yii\helpers\Html;
?>
<?
    $form = ActiveForm::begin([

            'options' => ['enctype' => 'multipart/form-data']
    ]);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p>Заголовок на главной</p>
            <?
                echo \vova07\imperavi\Widget::widget([
                    'name' => 'redactor',
                    'value' => $models->texrt,
                    'settings' => [
                        'lang' => 'ru',
                        'minHeight' => 200,
                        'plugins' => [
                            'clips',
                            'fullscreen',
                        ],
                        'clips' => [
                            ['Lorem ipsum...', 'Lorem...'],
                            ['red', '<span class="label-red">red</span>'],
                            ['green', '<span class="label-green">green</span>'],
                            ['blue', '<span class="label-blue">blue</span>'],
                        ],
                    ],
                ]);
            ?>

        </div>
        <div class="col-md-12">
            <p>Баннер на главнонй странице</p>
            <br>
            <?
                echo $form->field( $modelsImg, 'image')->fileInput()->label(false);
            ?>

            <? if(!empty($modelsImg->texrt)):?>
                <img src="<?=  $modelsImg->texrt?>" alt="" style="max-width:200px; margin-top: 20px; margin-bottom: 20px;">
            <? endif;?>
        </div>
        <br>
        <hr>
        <div class="col-md-12">

        </div>
        <div class="col-md-12 mt-5">
            <?= Html::submitButton('Сохранить',['class'=>'pur_link btn_pur'])?>
        </div>
    </div>
</div>

<?
    ActiveForm::end();

?>