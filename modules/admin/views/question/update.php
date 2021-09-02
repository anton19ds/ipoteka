<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Question */

$this->title = 'Править: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Править', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="question-update">
    <div class="row">
        <div class="col-md-12">
    <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="col-md-12 mt-5">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </div>
</div>
</div>
