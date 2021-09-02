<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\widgets\UserMenu;
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
						<div class="form_a">
							<p class="tit_lb" style="margin-bottom: 20px">Загрузка документов</p>
							<div class="row">
								<div class="col-md-12">



									<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']])?>
									<label for="">Сканы документов</label>
									<div class="load_docs">

										<input type="text" id="pass_v" placeholder="Выберите файл">

									<?= $form->field($model, 'imageFile')->fileInput(['class' =>'led_pas'])->label(false) ?>
									</div>
									<?= Html::submitButton('Отправить', ['class' => 'pur_link btn_nex']) ?>

									<?php ActiveForm::end() ?>
								</div>
								<div class="col-md-12 in_doc_user">
									<?if (!empty($loadUser)):?>
										<?php foreach ($loadUser as $key): ?>
											<ul class="document_user">
												<li>
													<span style="max-width: 200px; word-wrap: break-word;"><?= $key->name?></span>
													<a href="" data-stc="/uploads/<?=$key->src?>" >Открыть документ</a>
												</li>
												<li>
													<?= date('Y/m/d H:s', $key->date)?>
												</li>
												<li>
													<?php if ($key->statys == 0): ?>
														<span class="ss">На проверке</span>
														<?php else: ?>
														<span class="ff">Проверен</span>
													<?php endif ?>
												</li>
											</ul>
										<?php endforeach ?>
									<? endif;?>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>				
	</div>
</div>

<?
$this->registerJs(" 
	$('#pass_v').on('click', function(e){
		$('.led_pas').trigger('click');
		});
		$('.led_pas').change(function(e){
			var val = $(this).val();
			$('#pass_v').val(val);
			});
		");
?>