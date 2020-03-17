<?php
$phone = "<a href='tel:+74951907671' class='tel'><i class='phone_alloka'>+7 495 <span>190 76 71</span></i></a>";

$work_time_start = '9:00';
$work_time_end = '22:00';

$startHour = (int)substr($work_time_start, 0, strpos($work_time_start, ':'));
$endHour = (int)substr($work_time_end, 0, strpos($work_time_end, ':'));
$nowHour = (int)date("G");


$thank_you_text = "Менеджер свяжется с Вами в ближайшее время";
if($nowHour > $endHour || $nowHour < $startHour) {
    $thank_you_text = "Менеджер свяжется с Вами в рабочее время";
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
<!--    <base href="http://localhost/besedki/">-->
    <meta charset="UTF-8">
    <title>Беседки из поликарбоната по низким ценам в Москве и МО</title>
    <meta name="Description" content="У нас Вы можете купить беседку из поликарбоната для дачи недорого! Доставка по Москве и области. Смотрите абсолютные хиты продаж на нашем сайте.">
    <link href="img/favicon.ico" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet/less" type="text/css" href="css/style.less">
    <script src="js/less.min.js"></script>
    <script type="text/javascript">
        var _alloka = {
            objects: {
                '7841a8f0b626283d': {
                    block_class: 'phone_alloka',
                    format: '<small>+7 #{XXX}</small> #{XXX} #{XX} #{XX}',
                    jivosite: false,
                    email: false
                }
            },
            trackable_source_types:  ["type_in", "referrer", "utm"],
            last_source: false,
            use_geo: true
        };
    </script>
    <script src="https://analytics.alloka.ru/v4/alloka.js" type="text/javascript"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106933622-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-106933622-2');
        /* Accurate bounce rate by time */
        setTimeout(function(){
            gtag('event', location.pathname, {
                'event_category': 'Новый посетитель'
            });
        }, 15000);
    </script>
    <script>var thankyouText = "<?php echo $thank_you_text;?>";</script>
</head>
<body>
<div id="backbutton" class="backbutton" style="display: none;"></div>
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
    var _tmr = window._tmr || (window._tmr = []);
    _tmr.push({id: "3031398", type: "pageView", start: (new Date()).getTime()});
    (function (d, w, id) {
        if (d.getElementById(id)) return;
        var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
        ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
        var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
        if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
    })(document, window, "topmailru-code");
</script><noscript><div>
        <img src="//top-fwz1.mail.ru/counter?id=3031398;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
    </div></noscript>
<!-- //Rating@Mail.ru counter -->

<!-- Rating@Mail.ru counter dynamic remarketing appendix -->
<script type="text/javascript">
    var _tmr = _tmr || [];
    _tmr.push({
        type: 'itemView',
        productid: 'VALUE',
        pagetype: 'VALUE',
        list: 'VALUE',
        totalvalue: 'VALUE'
    });
</script>
<!-- // Rating@Mail.ru counter dynamic remarketing appendix -->
<header>
    <div class="container">
        <a href="#catalog" class="scrollTo"><img src="img/first_screen/logo.png" alt="" class="logo"></a>
        <p class="sitename">Продажа белорусских беседок из<br> поликарбоната в Москве и области</p>
        <div class="contact">
            <?php echo $phone; ?>
            <a href="#call" class="fancy button">Заказать консультацию</a>
        </div>
        <div class="worktime">
            Время работы:<br> <?php echo "$work_time_start - $work_time_end"; ?>
            без выходных
        </div>
    </div>
</header>
<div class="utp">
    <div class="container">
        <div class="left-side">
            <h1>Беседки из Беларуси <br>оцинкованные по ГОСТ</h1>
            <h2>от 10 700 руб. без предоплаты</h2>
            <div class="subtitle">Защищают от дождя и ветра</div><br>
            <div class="subtitle">Не нужно разбирать на зиму</div><br>
            <div class="subtitle">Доставим уже завтра</div>
        </div>
        <div class="right-side">
            <!-- <div class="bronForm">
                <form action="" method="post" id="bronForm">
                    <p class="title">Забронируй</p>
                    <p class="green-text">оцинкованную беседку</p>
                    <p>по цене окрашенной</p>
                    <input type="text" name="phone" placeholder="Телефон">
                    <input type="hidden" name="type" value="Забронировать">
                    <input type="hidden" name="utm_term" value="">
                    <input type="hidden" name="utm_source" value="">
                    <input type="hidden" name="utm_medium" value="">
                    <input type="hidden" name="utm_campaign" value="">
                    <input type="hidden" name="utm_content" value="">
                    <input type="submit" value="забронировать" class="button">
                </form>
                <div class="info-block">
                    <p>На <span><?php echo date("d.m.y");?></span></p>
                    <p>осталось <span id="ostalos">8</span> шт.</p>
                </div>
            </div> -->
            <div class="mangal">
                <form action="" method="POST" id="mangalForm">
                    <h2>К любой беседке!</h2>
                    <img src="img/mangal.jpg" alt="">
                    <h3>Мангал в подарок!</h3>
                    <input type="text" name="phone" placeholder="Телефон">
                    <input type="hidden" name="type" value="Забронировать мангал">
                    <input type="hidden" name="utm_term" value="">
                    <input type="hidden" name="utm_source" value="">
                    <input type="hidden" name="utm_medium" value="">
                    <input type="hidden" name="utm_campaign" value="">
                    <input type="hidden" name="utm_content" value="">
                    <input type="submit" class="button" value="Забронировать">
                    <p>За вашим номером телефона будет закреплен подарок</p>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="pluses">
    <div class="container">
        <div class="plus">
            <img src="img/first_screen/icon-1.png" alt="">
           <p>Сборка не более 2-х часов</p> 
        </div>
        <div class="plus">
            <img src="img/first_screen/icon-2.png" alt="">
            <p>Оплата по факту <br/>доставки </p>
        </div>
        <div class="plus">
        <img src="img/first_screen/icon-3.png" alt="">
            <p>Заводская гарантия от 15 лет</p>
        </div>
    </div>
</div>
<div class="catalog" id="catalog">
        <h2>Каталог беседок из поликарбоната</h2>
        <div class="item">
            <div class="container">
                <div class="img left">
                    <img src="img/astra.jpg" alt="">
                    <div class="planka"><img src="img/catalog/sticker-dlia-dachi.png" alt=""></div>
                    <div class="details">
                        <img src="img/catalog/detail1.jpg" alt="">
                        <img src="img/catalog/detail2.jpg" alt="">
                    </div>
                    <a class="sticker fancy" href="#getColor"><img src="img/catalog/sticker-color.png" alt=""></a>
                </div>
                <div class="content right">
                    <h3>Беседка садовая “Классик”</h3>
                    <p><span>Каркас беседки</span> изготовлен из прочной цельногнутой оцинкованной профильной трубы 40х20 и 20х20</p>
                    <p><span>Крыша беседки</span> изготовлена из сотового поликарбоната.</p>
                    <p><span>Сборка</span> осуществляется с помощью болтов и гаек.</p>
                    <p><span>Лавки и столешница</span> изготавливаются из сухой обрезной доски.</p>
                    <p class="gift"><i class="fa fa-gift"></i><span>Доска для лавок и стола В ПОДАРОК!</span></p>
                    <p><span>В комплектацию входит:</span> металлические детали каркаса, стяжки, болты, гайки, саморезы, обрезные доски, поликарбонат</p>
                    <p><span>Размер: </span>длина - 1,9 м, ширина - 2,3 м, высота - 2,02 м, ширина по основанию - 1,73 м</p>
                </div>
                <?php include 'templates/forma.php'; ?>
            </div>
        </div>
        <div class="item">
            <div class="container">
                <div class="img right">
                    <img src="img/tulip.jpg" alt="">
                    <div class="planka">
                        <img src="img/catalog/sticker-dlia-companii.png" alt="">
                    </div>
                    <div class="details">
                        <img src="img/catalog/detail1.jpg" alt="">
                        <img src="img/catalog/detail2.jpg" alt="">
                    </div>
                    <div class="sticker"></div>
                </div>
                <div class="content left">
                    <h3>Беседка “Комфорт”</h3>
                    <p><span>Каркас беседки</span> изготовлен из прочной цельногнутой оцинкованной профильной трубы 40х20 и 20х20</p>
                    <p><span>Крыша беседки</span> изготовлена из сотового поликарбоната.</p>
                    <p><span>Сборка</span> осуществляется с помощью болтов и гаек.</p>
                    <p><span>Лавки и столешница</span> изготавливаются из сухой обрезной доски.</p>
                    <p class="gift"><i class="fa fa-gift"></i><span>Доска для лавок и стола В ПОДАРОК!</span></p>
                    <p><span>В комплектацию входит:</span> металлические детали каркаса, стяжки, болты, гайки, саморезы, обрезные доски, поликарбонат</p>
                    <p><span>Размер: </span>длина - 1,9 м, ширина - 2,8 м, высота - 2,02 м, ширина по основанию - 1,48 м</p>
                </div>
                <?php include 'templates/forma.php'; ?>
            </div>
        </div>
        <div class="item">
            <div class="container">
                <div class="img left">
                    <img src="img/pion.jpg" alt="">
                    <div class="planka">
                        <img src="img/catalog/sticker-dlia-sem-i.png" alt="">
                    </div>
                    <div class="details">
                        <img src="img/catalog/detail1.jpg" alt="">
                        <img src="img/catalog/detail2.jpg" alt="">
                    </div>
                    <a  href="#getColor" class="sticker fancy"><img src="img/catalog/sticker-color.png" alt=""></a>
                </div>
                <div class="content right">
                    <h3>Беседка садовая “Престиж”</h3>
                    <p><span>Каркас беседки</span> изготовлен из прочной цельногнутой оцинкованной профильной трубы 40х20 и 20х20</p>
                    <p><span>Крыша беседки</span> изготовлена из сотового поликарбоната.</p>
                    <p><span>Сборка</span> осуществляется с помощью болтов и гаек.</p>
                    <p><span>Лавки и столешница</span> изготавливаются из сухой обрезной доски.</p>
                    <p class="gift"><i class="fa fa-gift"></i><span>Доска для лавок и стола В ПОДАРОК!</span></p>
                    <p><span>В комплектацию входит:</span> металлические детали каркаса, стяжки, болты, гайки, саморезы, обрезные доски, поликарбонат</p>
                    <p><span>Размер: </span>длина - 1,9 м, ширина - 2,3 м, высота - 2 м, ширина по основанию - 1,73 м</p>
                </div>
                <?php include 'templates/forma.php'; ?>
            </div>
        </div>
</div>
<div id="gallery">
    <div class="container">
        <h2>Наши беседки</h2>
        <div class="owl-carousel gallery-carousel">
            <div class="item">
                <a href="img/gallery/big/01.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/01.jpg" alt="">
                </a>
                <a href="img/gallery/big/02.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/02.jpg" alt="">
                </a>
                <a href="img/gallery/big/03.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/03.jpg" alt="">
                </a>
                <a href="img/gallery/big/04.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/04.jpg" alt="">
                </a>
                <a href="img/gallery/big/05.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/05.jpg" alt="">
                </a>
                <a href="img/gallery/big/06.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/06.jpg" alt="">
                </a>
                <a href="img/gallery/big/07.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/07.jpg" alt="">
                </a>
                <a href="img/gallery/big/08.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/08.jpg" alt="">
                </a>
            </div>
            <div class="item">
                <a href="img/gallery/big/09.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/09.jpg" alt="">
                </a>
                <a href="img/gallery/big/10.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/10.jpg" alt="">
                </a>
                <a href="img/gallery/big/11.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/11.jpg" alt="">
                </a>
                <a href="img/gallery/big/12.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/12.jpg" alt="">
                </a>
                <a href="img/gallery/big/13.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/13.jpg" alt="">
                </a>
                <a href="img/gallery/big/14.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/14.jpg" alt="">
                </a>
                <a href="img/gallery/big/15.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/15.jpg" alt="">
                </a>
                <a href="img/gallery/big/16.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/16.jpg" alt="">
                </a>
            </div>
            <div class="item">
                <a href="img/gallery/big/17.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/17.jpg" alt="">
                </a>
                <a href="img/gallery/big/18.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/18.jpg" alt="">
                </a>
                <a href="img/gallery/big/19.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/19.jpg" alt="">
                </a>
                <a href="img/gallery/big/20.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/20.jpg" alt="">
                </a>
                <a href="img/gallery/big/21.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/21.jpg" alt="">
                </a>
                <a href="img/gallery/big/22.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/22.jpg" alt="">
                </a>
                <a href="img/gallery/big/23.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/23.jpg" alt="">
                </a>
                <a href="img/gallery/big/24.jpg" class="fancy" data-fancybox="gallery">
                    <img src="img/gallery/small/24.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
<div class="profconsultation">
    <div class="container">
        <h2>
            Не знаете какую беседку выбрать?<br>
            Спросите профессионала!
        </h2>
        <div class="plashka">
            <form id="profconsultation-form" action method="post">
                <h3>
                    Позвоните по номеру <?php echo $phone; ?><br>
                    или оставьте заявку
                </h3>
                <div class="choose">
                    <label for="profconsultationname">Введите ваше имя</label>
                    <input type="text" name="name" id="profconsultationname" placeholder="Ваше имя">
                </div>
                <div class="choose">
                    <label for="profconsultationphone">Введите номер телефона</label>
                    <input type="text" name="phone" class="phone_mask" id="profconsultationphone" required placeholder="+7 (***) ***-**-**">
                </div>
                <input type="hidden" name="type" value="Спросите профессионала">
                <input type="hidden" name="utm_term" value="">
                <input type="hidden" name="utm_source" value="">
                <input type="hidden" name="utm_medium" value="">
                <input type="hidden" name="utm_campaign" value="">
                <input type="hidden" name="utm_content" value="">
                <input type="submit" value="Получить консультацию" class="button">
            </form>
        </div>
    </div>
</div>
<div class="sborka">
    <div class="container">
        <h2>Простая и быстрая сборка беседки</h2>
        <div class="plashka">
            <ul>
                <li>
                    <img src="img/molot.png" alt="" class="star">
                    <p>
                        Наши беседки способен собрать любой человек.
                        Один человек может собрать беседку максимум за 2 часа.
                    </p>
                </li>
                <li>
                    <img src="img/molot.png" alt="" class="star">
                    <p>
                        Наш поликарбонат скручен в рулоны. И подобран уже специально
                        под размеры беседки. При накрывании беседки не надо ничего резать!
                        При монтаже поликарбоната на крышу - просто прикрутите поликарбонат
                        к каркасу беседки. Вам ничего не нужно вымерять и резать,
                        к Вам приходит уже почти готовая беседка.
                    </p>
                </li>
                <li>
                    <img src="img/molot.png" alt="" class="star">
                    <p>
                        Монтаж поликарбоната к каркасу производится саморезами
                        с резиновыми шайбами.
                    </p>
                </li>
                <li>
                    <img src="img/molot.png" alt="" class="star">
                    <p>
                        Прилагается легкая и понятная инструкция по сборке.
                    </p>
                </li>
            </ul>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <img src="img/first_screen/logo_invert.png" alt="" class="logo">
        <p class="sitename">Беседки из поликарбоната<br> в Москве и области</p>
        <div class="contact">
            <?echo $phone;?>
            <a href="#call" class="fancy button">Заказать звонок</a>
        </div>
        <div class="worktime">
            Время работы: <?php echo "$work_time_start - $work_time_end"; ?><br>
            без выходных
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="container">
        <p class="unp">
            ООО "АгроМастер" ИНН 5047229074
        </p>
        <a href="http://www.deltaplan.by/" target="_blank">Разработано DELTAPLAN GROUP</a>
    </div>
</div>

<div id="call" class="vsplivashka" style="display: none">
    <form action method="post" id="callForm">
        <h3>Бесплатный звонок</h3>
        <div class="description">
            Заполните форму, и мы свяжемся
            с Вами в течение 15 минут
        </div>
        <div class="text">Введите Ваше имя:</div>
        <input type="text" name="name" placeholder="Ваше имя">
        <div class="text">Введите Ваш номер телефона:</div>
        <input type="text" name="phone" class="phone_mask" required placeholder="+7 (***) ***-**-**">
        <input type="hidden" name="type" value="Заказ звонка">
        <input type="hidden" name="utm_term" value="">
        <input type="hidden" name="utm_source" value="">
        <input type="hidden" name="utm_medium" value="">
        <input type="hidden" name="utm_campaign" value="">
        <input type="hidden" name="utm_content" value="">
        <input type="submit" value="Заказать звонок" class="button">
    </form>
</div>

<div id="getColor" style="display:none;">
    <form action="" method="POST" id="getColorForm">
        <h2>Выберите цвет поликарбоната и получите информацию о наличии и сроках доставки на свой телефон</h2>
        <div class="checkbox-group">
            <div class="color">
                <img src="img/colors/zeleniy.png" alt="">
                <p><input type="checkbox" name="colorPopup[]" value="Зеленый">Зеленый</p>
            </div>
            <div class="color">
                <img src="img/colors/biruza.png" alt="">
                <p><input type="checkbox" name="colorPopup[]" value="Бирюзовый">Бирюзовый</p>
            </div>
            <div class="color">
                <img src="img/colors/bronza.png" alt="">
                <p><input type="checkbox" name="colorPopup[]" value="Бронзовый">Бронзовый</p>
            </div>
            <div class="color">
                <img src="img/colors/granat.png" alt="">
                <p><input type="checkbox" name="colorPopup[]" value="Гранатовый">Гранатовый</p>
            </div>
            <div class="color">
                <img src="img/colors/jeltiy.png" alt="">
                <p><input type="checkbox" name="colorPopup[]" value="Желтый">Желтый</p>
            </div>
            <div class="color">
                <img src="img/colors/krasniy.png" alt="">
                <p><input type="checkbox" name="colorPopup[]" value="Красный">Красный</p>
            </div>
            <div class="color">
                <img src="img/colors/orang.png" alt="">
                <p><input type="checkbox" name="colorPopup[]" value="Оранжевый">Оранжевый</p>
            </div>
            <div class="color">
                <img src="img/colors/siniy.png" alt="">
                <p><input type="checkbox" name="colorPopup[]" value="Синий">Синий</p>
            </div>
            <div class="color">
                <img src="img/colors/tonirovaniy.png" alt="">
                <p><input type="checkbox" name="colorPopup[]" value="Тонированный">Тонированный</p>
            </div>
            <div class="color">
                <img src="img/colors/transparent.png" alt="">
                <p><input type="checkbox" name="colorPopup[]" value="Прозрачный">Прозрачный</p>
            </div>
        </div>
        <p class="text">Введите Ваш номер телефона:</p>
        <input type="text" name="phone" placeholder="+7 (***) ***-**-**">
        <input type="hidden" name="type" value="Выбор цвета">
        <input type="hidden" name="utm_term" value="">
        <input type="hidden" name="utm_source" value="">
        <input type="hidden" name="utm_medium" value="">
        <input type="hidden" name="utm_campaign" value="">
        <input type="hidden" name="utm_content" value="">
        <input type="submit" class="button" value="Отправить">
    </form>
</div>

<div id="close-popup" style="display:none;">
    <form action="" method="post" id="close-popup-form">
        <header>
            <p>Не торопитесь уходить, для Вас есть</p>
            <p class="white">специальное предложение!</p>
        </header>
        <h3>Получите двойной подарок</h3>
        <img src="img/close-popup.jpg" alt="">
        <p>Для получения подарка заполните форму ниже</p>
        <input type="text" name="phone" placeholder="Телефон">
        <input type="hidden" name="type" value="Попап получить подарок">
        <input type="hidden" name="utm_term" value="">
        <input type="hidden" name="utm_source" value="">
        <input type="hidden" name="utm_medium" value="">
        <input type="hidden" name="utm_campaign" value="">
        <input type="hidden" name="utm_content" value="">
        <input type="submit" class="button" value="Получить подарок">
    </form>
</div>
<a href="#close-popup" id="goout" class="fancy"></a>

<script src='js/jquery-3.1.1.min.js'></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>

<!-- Add fancyBox -->
<script type="text/javascript" src="js/fancybox/jquery.fancybox.min.js"></script>
<script src="js/script.js"></script>
<script src="js/js-form.js"></script>

<?php
$utm_term = $_GET["utm_term"];
quotemeta($utm_term);
$utm_source = $_GET["utm_source"];
quotemeta($utm_source);
$utm_medium = $_GET["utm_medium"];
quotemeta($utm_medium);
$utm_campaign = $_GET["utm_campaign"];
quotemeta($utm_campaign);
$utm_content = $_GET["utm_content"];
quotemeta($utm_content);
echo '
    <script>
        $("input[name=utm_term]").val("'.$utm_term.'");
        $("input[name=utm_source]").val("'.$utm_source.'");
        $("input[name=utm_medium]").val("'.$utm_medium.'");
        $("input[name=utm_campaign]").val("'.$utm_campaign.'");
        $("input[name=utm_content]").val("'.$utm_content.'");
    </script>
    ';
?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48923588 = new Ya.Metrika({
                    id:48923588,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48923588" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>