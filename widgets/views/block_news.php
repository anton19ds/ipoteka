            <div class="col-md-3">
                <p class="title_trel">Читайте новости <br> и статьи</p>
            </div>
            <div class="col-md-9">
                <div class="dis_ordt">
                    <? $i=1;?>
                    <?php foreach ($models as $key): ?>
                        <div class="block_fret_Y">
                            <p><?= $key->name?></p>
                            <p>
                            <?= mb_strimwidth($key->text, 0, 300, "...");?>
                            </p>

                            <a href="/news/<?= $key->id?>" class="more bel <?if($i == 2 || $i == 3) echo 'cl_blac';?>">Подробнее</a>
                        </div>
                        <? $i++;?>    
                    <?php endforeach ?>
                </div>
    </div>
<div class="col-md-12 fl-l">
    <a href="/news" class="pur_link" style="margin-top: 25px;">Все новости</a>
</div>