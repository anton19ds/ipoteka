<div class="blcontainer">
  	<div class="let_pl">
  		<div class="img_pl" style="background-image: url('/img/kret.png'); background-repeat: no-repeat;">
  			<div class="ab_pret">
  				<ul class="breadcram">
  					<li>
  						<a href="">Главная</a>
  					</li>
  					<li>
  						/ Вопросы и ответы
  					</li>
  				</ul>
  				<h1>Вопросы и ответы</h1>						
  			</div>
  		</div>
  	</div>
  </div>
  <div class="blcontainer">
  	<div class="second_block">
  		<div class="row pb_123">
            <? foreach($models as $key):?>
                <div class="col-md-4 mt-4">
  				    <h2 class="uslug_title qps"><?= $key->title?></h2>
  			    </div>
  			    <div class="col-md-8 mt-5">
  				    <p class="quest_text pl">
  					    <?= $key->text?>
  					    <span class="nefert"></span>
  				    </p>
  			    </div>
            <? endforeach;?>
  		</div>
  	</div>
  </div>