<?php include('../header_lk.php');?>
<div id="page_reg_1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Ваша регистрация</h2>
			</div>
			<div class="col-md-12">
				<div class="l_over_data">
					<ul class="form_sk">
						<li>
							<p>Общие данные</p>
						</li>
						<li>

							<input type="text" placeholder="Имя*">
						</li>
						<li><input type="text" placeholder="Фамилия*"></li>
						<li><input type="text" placeholder="Отчество*"></li>
						<li>
							<label for="">Введите номер телефона</label>
							<input type="text" placeholder="+7 (___) __-__">
						</li>
						<li>
							<label for="">Введите код подтверждения</label>
							<input type="text" placeholder="Код подтверждения">
						</li>
					</ul>
				</div>
				<div class="r_over_data">
					<ul class="form_tk">
						<li>
							<p>Ваш пол:</p>
						</li>
						<li>
							<div class="in_bocks in_chek_p min_p">
								<span id="param3"></span>
								<input type="checkbox">
								<label for="" style="margin-left: 10px;">Мужчина</label>
							</div>
						</li>
						<li>
							<div class="in_bocks in_chek_p min_p">
								<span id="param3"></span>
								<input type="checkbox">
								<label for="" style="margin-left: 10px;">Женщина</label>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-12">
				<a href="" class="pur_link mt-34" id="send_rel">Отправить</a>
			</div>
			<div class="col-md-12">
				<div class="in_bocks in_chek_p min_p">
					<span id="param3"></span>
					<input type="checkbox">
					<label for="" style="margin-left: 10px;" class="succ">Согласен на обработку персональных данных (подробная информация).<br>
					С правилами заполнения заявки также согласен.</label>
				</div>
			</div>
		</div>
	</div>	
</div>
<?php include('../footer.php')?>