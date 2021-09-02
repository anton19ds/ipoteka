<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\widgets\AdminMenu;
/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Статус заявки';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="user-index">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrams">
				<li><a href="/admin/user">Пользаватели</a> /</li>                     
				<li><?= Html::encode($this->title) ?></li>                        
			</ul>
			<p class="cabinet_upd"><?= Html::encode($this->title) ?></p>
		</div>
	</div>
</div>