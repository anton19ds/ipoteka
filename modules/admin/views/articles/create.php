<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Articles */

$this->title = 'Новая статья';
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
	<div class="col-md-12">
		<ul class="breadcrams">
			<li>Статьи /</li>						
			<li>Новая статья</li>						
		</ul>
		<p class="cabinet_upd"><?= Html::encode($this->title) ?></p>
	</div>
	<div class="col-md-12 mt-5">
		<div class="articles-create">

			<?= $this->render('_form', [
				'model' => $model,
			]) ?>
		</div>		
	</div>
</div>
