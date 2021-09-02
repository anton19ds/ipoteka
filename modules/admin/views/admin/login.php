<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?
$form = ActiveForm::begin([
    'id' => 'l-form',
    //'options' => ['class' => 'form-horizontal'],
]) ?>


<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-12 mt-5">
        	<div class="row mt-5">
        		<div class="col-md-8">
        			<label for="">Login</label>
        			<?= $form->field($model, 'username')->textInput()->label(false); ?>
        		</div>
        		<div class="col-md-8 mt-5">
        			<label for="">Password</label>
        			<?= $form->field($model, 'password')->textInput()->label(false) ?>
        		</div>
        		<div class="col-md-8">
        			
            <?= Html::submitButton('Отправить', ['class' => 'pur_link mt-34 btn_nex']) ?>		
        		</div>
        	</div>
            
            
        </div>
    </div>
</div>


<? ActiveForm::end();?>