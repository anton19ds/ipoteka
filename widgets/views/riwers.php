
            <div class="col-md-4">
                <p class="title_trel">Что говорят <br>  наши клиенты</p>
            </div>
            <div class="col-md-8 fl-l">
                <div class="dis_ordt">
                    <? if(!empty($models)):?>
                        <? foreach($models as $item):?>
                            <div class="riwers_bl">
                        <ul>
                            <li><?= $item->name?></li>
                            <li><?= $item->age?> лет, <?= $item->city?></li>
                        </ul>
                        <p>
                            <?= $item->text?>
                        </p>
                    </div>
                        <? endforeach;?>
                    <? endif;?>
                </div>
                <? if($page != 'let'):?>
                <a href="/reviews" class="bl_link" style="margin-top: 25px">Показать ещё</a>
                <? endif;?>
            </div>