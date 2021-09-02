<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\Articles */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
	<div class="articles-form">
		<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
		<div class="col-md-12 mt-4">
			<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>	
		</div>
		<div class="col-md-12 mt-4">
			<?= $form->field($model, 'img')->fileInput()->label(false) ?>	
		</div>
		<div class="col-md-12 mt-4">
			
			<?= $form->field($model, 'text')->widget(CKEditor::className(),[
				'editorOptions' => [
        'preset' => 'standard', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],
]);?>
<div class="col-md-12 mt-4">
	
<div class="form-group">
	<?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
</div>
</div>			
</div>


<?php ActiveForm::end(); ?>
</div>	
</div>

