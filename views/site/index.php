<?php

/* @var $this yii\web\View */
use app\widgets\GeneralBlock;
use app\widgets\RiwersBlock;
use app\widgets\NewsBlock;
use app\widgets\UslugiWid;
use yii\bootstrap4\Modal;

$this->title = 'My Yii Application';
?>
<div class="blcontainer">
    <div class="first_block">
        <div class="banner" style="height: 540px; background: url(<?= $mainImage['texrt']?>); background-position: 0px; background-size: cover;">
            <img src="<?= $mainImage['texrt']?>" alt="" style="display: none;">
            <div class="banner_in">
                <?= $mainTitle['texrt'];?>
                <div class="bs">
                    <p>Наши эксперты помогут в полном <br>сопровождении ипотечного процесса</p>
                    <a href="#" class="addZayavka">Оставить заявку</a>
                </div>
            </div>
        </div>
        <div class="calculator">
            <div class="title_calculator">
                Рассчитайте онлайн-ипотеку
            </div>
            <div class="left_block">
                <div class="block_in select">
                    <div id="selec">
                        <p>Цель кредита</p>
                        <p class="param">Новостройка</p>
                        <div class="lis_select cls">
                            <span class="spFF" data-type="Новостройка">Новостройка</span>
                            <span class="spFF" data-type="Вторичка">Вторичка</span>
                            <span class="spFF" data-type="Котедж">Котедж</span>                         
                        </div>

                    </div>
                </div>

                <div class="block_in in_check in_chek_p">
                    <span id="param1" style="margin-right: 10px;"></span>
                    <input type="checkbox">
                    <label for="">Есть зарплатная карта (- 0,8%)</label>
                </div>

                <div class="block_in in_text">
                    <label for="">Стоимость недвижимости</label>
                    <input type="text" id="inPols" value="3 000 000" maxlength="10">
                    <div id="polzunok_1">
                        <span class="min">500 000 ₽</span>
                        <span class="max">30 млн. ₽</span>
                    </div>


                </div>

                <div class="block_in in_check in_chek_p">
                    <span id="param2" style="margin-right: 10px;"></span>
                    <input type="checkbox">
                    <label for="">Использовать материнский капитал</label>
                </div>

                <div class="block_in in_text">
                    <label for="" >Срок кредита</label>
                    <input type="text" id="imPols" value="15" maxlength="2">
                    <div id="polzunok_2">
                        <span class="min">1 год</span>
                        <span class="max">30 лет</span>
                    </div>
                </div>
            </div>
            <div class="right_block">
                <ul>
                    <li>
                        <span>Ежемесячный платеж</span>
                        <p><span class="spanBt" id="platMes">5 657 ₽</span><span class="ser" id="procStef"> / 7 644 ₽</span></p>
                    </li>

                    <li>
                        <span>Процентная ставка</span>
                        <p>
                            <span class="pur" id="stafkaMes">1,5%</span><span class="ser" id="stafkaYer" data-val ="12"> / 12%</span>
                        </p>
                    </li>

                    <li>
                        <span>Сумма кредита</span>
                        <p>
                            <span class="spanBt"><span id="creSumm">3 000 000</span> ₽</span>
                        </p>
                    </li>

                    <li>
                        <span>Необходимый доход</span>
                        <p>
                            <span class="spanBt">9 840 ₽</span>
                        </p>
                    </li>

                    <li>
                        <span>Выгода от снижения ставки</span>
                        <p>
                            <span class="spanBt">76 593 ₽</span>
                        </p>
                    </li>

                    <li>
                        <div class="in_bocks in_chek_p min_p">
                            <span id="param3"></span>
                            <input type="checkbox">
                            <label for="">Страхование жизни (-1%)</label>
                        </div>

<!--                        <div class="in_bocks in_chek_p min_p">-->
<!--                            <span id="param4"></span>-->
<!--                            <input type="checkbox">-->
<!--                            <label for="">Скидка от застройщика на 1 год (-6,4%)</label>-->
<!--                        </div>-->
                        <div class="in_bocks in_chek_p min_p">
                            <span id="param5"></span>
                            <input type="checkbox">
                            <label for="">Электронная регистрация сделки (-0,3%)</label>
                        </div>
                    </li>

                    <li>
                        <a href="" id="openGrafik">График платежей</a>
                        <a href="" class="addZayavka">Подать заявку</a>
                    </li>

                    <li>
                        <p>Расчёт параметров кредитования является<br> предварительным, не является публичной офертой.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="second_block" id="forpop">
        <div class="row">
            <div class="col-12">
                <p class="title_s">Как это работает?</p>
            </div>
            <div class="col-3_ld">
                <div class="block_in">
                    <span>1</span>
                    <p>Первичная регистрация</p>
                </div>
                <p class="desc_bl">Регистрация на проекте займет 
                    у Вас не более 10 минут. Для 
                    этого Вам понадобится паспорт, 
                    мобильный телефон для приема 
                    СМС, адрес электронной почты 
                    и дебетовая карта любого <br>
                банка России.</p>
                <? if(Yii::$app->user->isGuest):?>
                <a href="/cabinet/new-user" class="bt_s">Регистрация</a>
                <? endif;?>
            </div>
            <div class="col-3_ld">
                <div class="block_in">
                    <span>2</span>
                    <p>Первичная регистрация</p>
                </div>
                <p class="desc_bl">Регистрация на проекте займет 
                    у Вас не более 10 минут. Для 
                    этого Вам понадобится паспорт, 
                    мобильный телефон для приема 
                    СМС, адрес электронной почты 
                    и дебетовая карта любого <br>
                банка России.</p>
            </div>
            <div class="col-3_ld">
                <div class="block_in">
                    <span>3</span>
                    <p>Первичная регистрация</p>
                </div>
                <p class="desc_bl">Регистрация на проекте займет 
                    у Вас не более 10 минут. Для 
                    этого Вам понадобится паспорт, 
                    мобильный телефон для приема 
                    СМС, адрес электронной почты 
                    и дебетовая карта любого <br>
                банка России.</p>
            </div>
            <div class="col-3_ld">
                <div class="block_in">
                    <span>4</span>
                    <p>Первичная регистрация</p>
                </div>
                <p class="desc_bl">Регистрация на проекте займет 
                    у Вас не более 10 минут. Для 
                    этого Вам понадобится паспорт, 
                    мобильный телефон для приема 
                    СМС, адрес электронной почты 
                    и дебетовая карта любого <br>
                банка России.</p>
            </div>
        </div>
    </div>
    <div class="third_block">
        <div class="row">
            <div class="col-md-4">
                <div class="title_class">
                    <p>О нашей <br>компании</p> 
                </div>

            </div>
            <div class="col-md-8">
                <div class="text_third_block">
                    <div class="in_block_tr">
                        <p>Наша компания начиналась с того, что мы оформляли ипотеку для себя. Пройдя весь этот 
                            нелегкий путь, мы начали помогать с оформлением родственникам, друзьям и знакомым. <br>
                        С тех пор прошло 14 лет, но подход к работе так и остался: "Как для себя".</p>
                        <p>
                            <span class="name">Лилия Решетникова</span>
                            <span class="op">Генеральный директор</span>    
                        </p>
                        <a href="/company" class="more_bl">Подробнее</a>
                    </div>

                    <div class="block_2_tr">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="plum">
                                    >750 млн. ₽
                                    <p>Ипотечных кредитов оформили<br> нашим клиентам за 2019 год</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="plum">
                                    98,3%
                                    <p>Общий процент одобряемости <br>ипотечного кредита у наших клиентов</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="plum">
                                    14 лет
                                    <p>На рынке ипотечного кредитования<br>Москвы и других регионов РФ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blcontainer btr_38" >
    <div class="banner_bt_1">
        <div class="row">
            <div class="col-md-12">
                <p class="zak_main">Почему выбирают <br>именно нас?</p>
            </div>
            <div class="col-md-6">
                <div class="plet_p">
                    <p class="zak_P_tt zak_1">Экономим <br>время и силы</p>

                    <p class="ste_r">Представляем интересы клиента
                        на всем пути оформления ипотеки:
                        готовим все документы; сами
                        договариваемся с банками, страховыми,
                    оценщиками и т.д. без участия клиента.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="plet_p">
                    <p class="zak_P_tt zak_2">Снижаем процентную <br>ставку по ипотеке</p>

                    <p class="ste_r">За 14 лет на рынке мы зарекомендовали себя как грамотные
                        партнеры и банкам выгодно с нами работать, так как мы
                        снимаем часть работы с их сотрудников. Взамен за нашу
                        работу банки дают нам разные преференции, в том числе
                    снижение % ставки для наших клиентов.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="plet_p">
                    <p class="zak_P_tt zak_3"> Постпродажное <br>сопровождение</p>

                    <p class="ste_r">Не бросаем клиентов на этапе
                        получения ипотеки. Консультируем
                        и решаем проблемы клиентов
                        на протяжении всего времени
                    ипотечного кредитования.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="plet_p">
                    <p class="zak_P_tt zak_4">Убираем <br>все риски</p>

                    <p class="ste_r">Никаких сюрпризов, просчитываем все расходы от
                        и до на старте, клиент будет точно знать сумму всех
                        необходимых трат. Никогда не оформляем ипотеку
                        на рискованную недвижимость, чтобы клиенты
                    не сталкивались с неприятными ситуациями.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blcontainer">
    <div class="second_block">
        <div class="row">
            <div class="col-md-12">
                <p class="title_trel">Наши кейсы</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="block_trp">
                    <p class="keis_tt trek_1">
                        <span>Уровень: Лёгкий</span>
                        <span class="pur_i">Молодая семья</span>
                        <span>20-27 лет</span>
                    </p>
                    <p class="tek_1">Потребность:</p>

                    <p class="tek_2">Одобрение ипотечного кредита<br>
                        и приобретения квартиры <br>
                    в г. Москва</p>
                    <p class="tek_1">Что было сделано?</p>

                    <p class="tek_2">Провели аналитическую работу,<br>
                        выбрав банк, который предложил <br>
                    ряд преференций клиенту</p>
                </div>
                <div class="block_tref">
                    <p class="tek_1">
                        Результат:
                    </p>
                    <p class="tek_2">
                        Клиенты приобрели желаемую квартиру <br>
                        с минимумом затрат и финальной<br>
                        процентной ставкой 7.99%, при базе<br> 
                        на вторичное жилье на тот момент 9.8%.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="block_trp">
                    <p class="keis_tt trek_2">
                        <span>Уровень: Оптимальный</span>
                        <span class="pur_i">Анна</span>
                        <span>26 лет</span>
                    </p>
                    <p class="tek_1">Потребность:</p>

                    <p class="tek_2">
                        Приобретение квартиры на этапе<br>
                        строительства по уступке
                    от физического лица.</p>
                    <p class="tek_1">Что было сделано?</p>

                    <p class="tek_2">Нами был предложен и реализован двухэтапный
                        выход на сделку: сперва оформление залоговой
                        сделки на вышеуказанную квартиру. Второй
                    этап - выход на сделку по покупке новостройки</p>
                </div>
                <div class="block_tref">
                    <p class="tek_1">
                        Результат:
                    </p>
                    <ul>
                        <li>
                            формирование достаточного<br> 
                            первоначального взноса;<br>
                        </li>
                        <li>
                            снижение процентной ставки на 1% <br>
                            после подтверждения целевого <br>
                            использования залогового кредита;<br>       
                        </li>
                        <li>
                            приобретение желаемой квартиры <br>
                            в новостройке.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="block_trp">
                    <p class="keis_tt trek_3">
                        <span>Уровень: Сложный</span>
                        <span class="pur_i">Молодая семья</span>
                        <span>30 лет</span>
                    </p>
                    <p class="tek_1">Потребность:</p>

                    <p class="tek_2">Продать имеющуюся ипотечную квартиру
                        и приобрести новое жилье с использованием
                    ипотечных кредитных средств</p>

                    <p class="tek_1">Что было сделано?</p>

                    <p class="tek_2">С разрешения органов Опеки дети наделены
                        не долями в квартире, а на их имя  открыты
                    депозиты с необходимой суммой. </p>

                </div>
                <div class="block_tref">
                    <p class="tek_1">
                        Результат:
                    </p>
                    <p class="tek_2">
                        Одобрено 15 млн рублей и получили
                        квартиру без первоначального взноса
                        со сроком на 25 лет
                    </p>
                </div>
            </div>
            <?= UslugiWid::widget(['type' => '1']);?>








            <div class="col-md-12">
                <p class="title_trel">Наши партнёры</p>
            </div>
            <div class="col-md-12">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">

                        <a class="nav-link active stell_lin" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Банки</a>

                    </li>
                    <li class="nav-item">

                        <a class="nav-link stell_lin" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Страховые компании</a>

                    </li>
                    <li class="nav-item">

                        <a class="nav-link stell_lin" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Оценочные компании</a>

                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="placc">
                            <div class="class_let">
                                <ul>
                                    <li>
                                        <div class="img_partner">
                                        </div>
                                    </li>
                                    <li>
                                        <span>Инком-недвижимость</span>
                                        <span>778 сделок</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="class_let">
                                <ul>
                                    <li>
                                        <div class="img_partner">
                                        </div>
                                    </li>
                                    <li>
                                        <span>Инком-недвижимость</span>
                                        <span>778 сделок</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="class_let">
                                <ul>
                                    <li>
                                        <div class="img_partner">
                                        </div>
                                    </li>
                                    <li>
                                        <span>Инком-недвижимость</span>
                                        <span>778 сделок</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="class_let">
                                <ul>
                                    <li>
                                        <div class="img_partner">
                                        </div>
                                    </li>
                                    <li>
                                        <span>Инком-недвижимость</span>
                                        <span>778 сделок</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="class_let">
                                <ul>
                                    <li>
                                        <div class="img_partner">
                                        </div>
                                    </li>
                                    <li>
                                        <span>Инком-недвижимость</span>
                                        <span>778 сделок</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="class_let">
                                <ul>
                                    <li>
                                        <div class="img_partner">
                                        </div>
                                    </li>
                                    <li>
                                        <span>Инком-недвижимость</span>
                                        <span>778 сделок</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="class_let">
                                <ul>
                                    <li>
                                        <div class="img_partner">
                                        </div>
                                    </li>
                                    <li>
                                        <span>Инком-недвижимость</span>
                                        <span>778 сделок</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="class_let">
                                <ul>
                                    <li>
                                        <div class="img_partner">
                                        </div>
                                    </li>
                                    <li>
                                        <span>Инком-недвижимость</span>
                                        <span>778 сделок</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="class_let">
                                <ul>
                                    <li>
                                        <div class="img_partner">
                                        </div>
                                    </li>
                                    <li>
                                        <span>Инком-недвижимость</span>
                                        <span>778 сделок</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                    </div>
                </div>
            </div>
            <div class="col-md-12 fl-l" style="display:flow-root;">
                <a href="/partner" class="pur_link">Показать ещё</a>
            </div>


            <?= RiwersBlock::widget();?>


            <?= NewsBlock::widget();?>

        </div>
    </div>      
</div>
<?= GeneralBlock::widget();?>


<?
    Modal::begin([
            'id' => 'grafik',
            'size' => 'modal-lg'
    ])


?>
    <div class="row">
        <div class="col-md-12">
            <div class="content_modal">

            </div>
        </div>
        <div class="col-md-12 mt-5">
            <a href="#" class="pur_link btn_pur close_md">Закрыть</a>
        </div>
    </div>


<?
    Modal::end();
?>