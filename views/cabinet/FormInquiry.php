<?
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use app\widgets\UserMenu;
    use yii\bootstrap4\Modal;
?>

<div id="lk_kabinet">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="fid_step">
                    <li>
                        <p>
                            <span>1</span>
                            <span>Данные заполнены</span>
                        </p>
                        <div></div>
                    </li>
                    <li>
                        <p>
                            <span>2</span>
                            <span>Заявка отправлена в банк</span>
                        </p>
                        <div></div>
                    </li>
                    <li>
                        <p>
                            <span>3</span>
                            <span>Ваша ипотека одобрена</span>
                        </p>
                        <div></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div id="page_reg_1">
        <div class="row">
            <div class="col-md-3">
                <?= UserMenu::widget();?>
            </div>
            <div class="col-md-9">
                <div class="user_right">
                    <div id="collet_pr">
                        <?
                            $form = ActiveForm::begin([
                                'id' => 'ls-form-tree',
                                //'options' => ['class' => 'form-horizontal'],
                            ]) ?>
                        <div class="form_a">
                            <?php if( Yii::$app->session->hasFlash('success') ): ?>
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <?php echo Yii::$app->session->getFlash('success'); ?>
                                </div>
                            <?php endif;?>
                            <p class="tit_lb">Заявка на изменение личных данных</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <?= $form->field($model, 'user_id')->hiddenInput(['value' => $id])->label(false)?>
                                    <?= $form->field($model, 'text')->textarea(['rows' => '6']);?>
                                </div>
                                <div class="col-md-12">
                                    <?= Html::submitButton('Отправить', ['class' => 'pur_link mt-34 btn_nex']) ?>
                                </div>
                            </div>
                        </div>
                        <? ActiveForm::end();?>
                    </div>

                    <? if(!empty($inquiry)):?>

                        <? foreach($inquiry as $value):?>
                                <ul class="document_user">
                                    <li>
                                        <span style="max-width: 200px; word-wrap: break-word;"># <?= $value->id?></span>
                                        <a href="" data-stc="<?=$value->id?>" class="open_zayv">Открыть заявку</a>
                                    </li>
                                    <li>
                                        <?= date('Y/m/d H:s', $value->date)?>
                                    </li>
                                    <li>
                                        <?php if ($value->statys == 0): ?>
                                            <span class="ss">На проверке</span>
                                        <?php else: ?>
                                            <span class="ff">Проверен</span>
                                        <?php endif ?>
                                    </li>
                                </ul>
                        <? endforeach;?>
                    <? endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
<?
    Modal::begin([
        'id' => 'in-modal'
    ]);
?>
    <div class="modal_text"></div>
<?
    Modal::end();

?>
