<?php 
    $utm_content = isset($_GET['utm_content']) ? $_GET['utm_content'] : "";
?>
<section id="utp">
    <div class="header">
        <div class="cont row_1035">
            <img src="images/utp/logo.png" alt="" class="logo">
            <p class="sitename">
                Официальный филиал-<br>
                склад в Москве и МО
                <?php
                    echo $utm_content === "rasprodazha" || "" ? "" : "<span>г. Химки Ленинградское шоссе д 290А</span>";
                ?>
            </p>
            <div class="contacts">
                <button data-toggle="modal" data-target=".bs-example-modal-lg" onclick="zvon();">Обратный звонок</button>
                <a href="tel:+74951085634" class="tel"><img src="images/utp/phone.png" alt=""><span class="phone_alloka"><small>+7 495</small> 108 56 34</span></a>
            </div>
            <div class="worktime">
                <img src="images/utp/clock.png" alt="">
                <p> 
                    Время работы:<br>
                    9:00 – 22:00 без выходных
                </p>
            </div>
        </div>
    </div>
    <!-- <div class="utp">
        <div class="cont row_1035">
            <h1>
                Финальная распродажа теплиц<br>
                из поликарбоната
                <span>со склада в Москве</span>
            </h1>
            <div class="warning">
                Приобретенную теплицу можно оставить на нашем складе до весны.
            </div>
            <img src="images/utp/ov.png" alt="" class="ovImg">
            <a class="action" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="shipping();">
                <div class="lineup">
                    Теперь доставка <span>бесплатно!</span>
                </div>
            </a>
            <a class="action" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="discount();">
                <div class="lineup">
                    Скидка <span>До 1000 руб.</span>
                </div>
            </a>
        </div>
    </div> -->
    <?php 
        $utp_class = $utm_content === "rasprodazha" || $utm_content === "" ? "rasprodazha" : "belzavod";
    ?>
    <div class="w-utp <?php echo $utp_class;?>">
        <div class="cont row_1035">
            <div class="sticker-spec <?php echo $utp_class;?>" data-toggle="modal" data-target="#spec-predlog">
                <img src="images/redesign/winner-utp/sticker.png" alt="">
            </div>
            <div class="plashka">
            <?php
                if($utm_content === "rasprodazha" || $utm_content === "") {
                    echo "<h1>Белорусские теплицы - <span>призер конкурса \"Урожай-2018\"</span></h1>";
                }
                else {
                    echo "<h1>Белорусский завод теплиц <br> открыл склад в <span>Москве!</span></h1>";
                }
            ?>
            <p><span>Оцинкованные теплицы ГОСТ 14918-80 <br>от 13 200 руб.</span>
            <img src="images/redesign/gost.png" alt=""></p>
            <div class="winner">
                <img src="images/redesign/winner-utp/cup_img.jpg" alt="">
                <p>В номинации "Закрытый грунт"</p>
            </div>
            </div>
            <div class="stickers <?php echo $utp_class;?>">
                <a class="sale" href="#" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="discount();">
                    <p>скидка</p>
                    <p>до <span>1000</span> руб.</p>
                    <img src="images/redesign/sticker_skidka.png" alt="">
                </a>
                <a class="free-dost" href="#" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="shipping();">
                    <p>теперь доставка</p>
                    <p>Бесплатно!</p>
                    <img src="images/redesign/sticker_dostavka.png" alt="">
                </a>
            </div>
        </div>
    </div>
    <?php 
        if($utm_content === "rasprodazha" || $utm_content === "") {
            echo "";
        }
        else {
            echo "<div class='w-hranenie'>
            <p>Собственная беспроцентная рассрочка</p>
        </div>";
        }
    ?>
    <div class="salesBlock" <?php if($utm_content === "rasprodazha" || $utm_content === "") echo "style='display:none;'";?>>
        <div class="cont row_1035">
            <div class="content">
                <div class="text item">
                    <?php
                        $btn_text = "Получить скидку";
                        $type_text = "Скидки первым 100 покупателям";

                        $next_date = ""; 
                        $sale = "";
                        $sale = date("d.m.Y", strtotime("+4 days"));
                        if($utm_content === 'rasprodazha') {
                            $btn_text = "Забронировать";
                            $type_text = "Забронировать по старым ценам";
                            echo "
                                <span class='small'>Переезд склада $sale</span>
                                <p>Успей забронировать <br>по старым ценам!</p>
                            ";
                        }
                        else {
                            $btn_text = "Рассчитать платеж";
                            $type_text = "Узнать ежемесячный платеж по рассрочке";
                            echo "
                                <span>Узнайте</span>
                                <p>ежемесячный платеж по рассрочке</p>
                            ";
                        }
                    ?>
                    
                </div>
                <div class="image item"><img src="images/winter/teplitsa.jpg" alt=""></div>
                <div class="form item">
                    <form action="" id="sale100-form" method="POST">
                        <select name="width">
                            <option disabled selected value="Не выбрано">Длина теплицы</option>
                            <option value="4м">4 м.</option>
                            <option value="6 м.">6 м.</option>
                            <option value="8 м.">8 м.</option>
                            <option value="10 м.">10 м.</option>
                        </select>
                        <input type="text" name="posPhone" placeholder="Ваш телефон" class="phone_mask">
                        <input type="hidden" name="type" value="<?php echo $type_text;?>">
                        <input type="hidden" name="utm_term" value="">
                        <input type="hidden" name="utm_source" value="">
                        <input type="hidden" name=" utm_medium" value="">
                        <input type="hidden" name="utm_campaign" value="">
                        <input type="hidden" name="utm_content" value="">
                        <input type="submit" value="<?php echo $btn_text;?>">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="presentsLine">
        <div class="cont row_1035">
            <img src="images/utp/leika.png" alt="" class="leikaImg">
            <h2>Мы не дарим ненужный инвентарь для того, чтобы заставить Вас купить теплицу!</h2>
            <div class="plashka">
                <div class="text">
                    Мы <span>производим</span> качественные теплицы по хорошей цене,
                    которые покупают!
                </div>
                <button data-toggle="modal" data-target=".bs-example-modal-lg" onclick="consult();">
                    Консультация и подбор теплицы
                </button>
            </div>
        </div>
    </div> -->
<!---->
<!--        <div class="row utp_cont row_960">-->
<!--            <div class="stic" onclick="nacenka()" data-toggle="modal" data-target=".bs-example-modal-lg"></div>-->
<!--            <div class="utp_text">-->
<!--                <p class="">-->
<!--                    ТЕПЛИЦЫ<br>-->
<!--                    ИЗ ПОЛИКАРБОНАТА-->
<!--                </p>-->
<!--                <p>-->
<!--                    <i style="color:#FFDF00">финальная распродажа<br>-->
<!--                    ОТ ПРОИЗВОДИТЕЛЯ</i>-->
<!--                </p>-->
<!--                <div class="green_bl">-->
<!--                    <p>-->
<!--                        Гарантированный-->
<!--                        срок эксплуатации 15 лет-->
<!--                    </p>-->
<!--                    <p>-->
<!--                        Быстрая доставка с собственного склада в Химках.-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="embl"></div>-->
<!--        </div>-->
<!--        <div class="row utp_akc row_960">-->
<!--            <p>-->
<!--                МЫ НЕ ДАРИМ НЕНУЖНЫЙ ИНВЕНТАРЬ <br>-->
<!--                для того, чтобы заставить Вас купить теплицу! <br>-->
<!--                <span>МЫ <i>ПРОИЗВОДИМ</i> КАЧЕСТВЕННЫЕ ТЕПЛИЦЫ ПО ХОРОШЕЙ ЦЕНЕ,-->
<!--                КОТОРЫЕ ПОКУПАЮТ!</span>-->
<!--            </p>-->
<!--            <button data-toggle="modal" data-target=".bs-example-modal-lg" onclick="consult();">Консультация и подбор-->
<!--                теплицы-->
<!--            </button>-->
<!--        </div>-->

</section>