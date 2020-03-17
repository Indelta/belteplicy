<footer>
    <div class="container">
        <div class="inner">
            <div class="logo">
                <img data-src="./img/logoTeplica.png" alt="" class="lazyload">
                <p>Продажа белорусских теплиц из поликарбоната</p>
            </div>
            <div class="time">
                <p>Время работы:<br> 9:00 - 22:00 <br> без выходных</p>
            </div>
            <div class="btn-block">
                <a href="tel:+74951907863" class="phone phone_alloka">+7 495 190-78-63</a>
                <a href="#" class="btn open-call-modal">Обратный звонок</a>
            </div>
        </div>
        <div class="copyright">
            <p>ООО "АгроМастер" ИНН 5047229074</p>
        </div>
    </div>
</footer>
<div id="modal-wrap">
    <div id="call-modal">
        <a href="#" class="close">&times;</a>
        <form id="call-form">
            <h2>Обратный звонок</h2>
            <p>Введите свой номер телефона и наш специалист перезвонит Вам в течение 15 минут</p>
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="tel" name="phone" placeholder="+7 (***) ***-**-**">
            <input type="hidden" name="type" value="Обратный звонок">
            <input type="hidden" name="utm_term" value="">
            <input type="hidden" name="utm_source" value="">
            <input type="hidden" name="utm_medium" value="">
            <input type="hidden" name="utm_campaign" value="">
            <input type="hidden" name="utm_content" value="">
            <input type="submit" value="Перезвонить мне" class="btn">
        </form>
    </div>
    <div id="thankyou-modal">
        <a href="#" class="close">&times;</a>
        <h2>Спасибо за заявку!</h2>
        <p>Наш специалист свяжется с Вами в течение 15 минут</p>
    </div>
    <div id="calculator-modal">
        <?php include ('templates/calculator.php');?>
    </div>
</div>