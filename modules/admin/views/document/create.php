<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocumentPage */

$this->title = 'Create Document Page';
$this->params['breadcrumbs'][] = ['label' => 'Document Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-page-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
