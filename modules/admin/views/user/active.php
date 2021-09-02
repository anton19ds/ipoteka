<svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg" class="active_click" data-id="<?= $model->id?>">
<rect x="0.5" y="0.5" width="33" height="33" rx="9.5" stroke="#CFCFCF"/>
<circle cx="10" cy="17" r="2" fill="#969696"/>
<circle cx="17" cy="17" r="2" fill="#969696"/>
<circle cx="24" cy="17" r="2" fill="#969696"/>
</svg>

<div class="model_menu">
	<ul class="user_<?= $model->id?>">
		<li><a href="/admin/user/view?id=<?= $model->id?>">Просмотр</a></li>
		<li><a href="">Удалить</a></li>
		<li><a href="">Заблокировать</a></li>
		<li><a href="/admin/user/update?id=<?= $model->id?>">Редактировать</a></li>
		<li><a href="/admin/user/applications?id=<?= $model->id?>">Отправить заявки в банк </a></li>
	</ul>
</div>







