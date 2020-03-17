$(document).ready(function () {
    $("form").submit(function(e) {

        var ref = $(this).find("required");
        $(ref).each(function(){
            if ( $(this).val() == '' )
            {
                alert("Поле не должно быть пустое!");
                $(this).focus();
                e.preventDefault();
                return false;
            }
        });  return true;
    });

    /*
     форма Заказ звонка
    */
    $('#callForm').submit(function (e) {
        e.preventDefault();
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var form_data = form.serialize();
        var phone = form.find('input[name="phone"]');

        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Заказать звонок');

        } else {
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter48923588.reachGoal('ZakazZvonka');
                    _tmr.push({ id: '3031398', type: 'reachGoal', goal: 'ZakazZvonka' });
                    gtag('event', 'send', {'event_category': 'Event', 'event_action': 'Send', 'event_label': 'ZakazZvonka' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Cпасибо за заявку!<br>" + thankyouText + "</div>");
                        $('.fancybox-inner').css("height","auto");
                        $('.fancybox-inner').css("width","auto");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Заказать звонок');
                    }, 10000);
                }
            });
        }
        return false;
    });


    // форма каталога

    $('.catalogForm').submit(function (e) {
        e.preventDefault();
        var but = $(this).find('input[type="submit"]');
        buttons = $('.catalogForm').find('input[type="submit"]');
        buttons.prop('disabled', true);
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var form_data = form.serialize();
        var phone = form.find('input[name="phone"]');

        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Узнать стоимость');

        } else {
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter48923588.reachGoal('ZakazZvonka');
                    _tmr.push({ id: '3031398', type: 'reachGoal', goal: 'ZakazZvonka' });
                    gtag('event', 'send', {'event_category': 'Event', 'event_action': 'Send', 'event_label': 'ZakazZvonka' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Cпасибо за заявку!<br>"+ thankyouText +"</div>");
                        $('.fancybox-inner').css("height","auto");
                        $('.fancybox-inner').css("width","auto");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.val('Узнать стоимость');
                    }, 10000);
                    setTimeout(function() {buttons.prop('disabled', false)}, 900000); // кнопки разблокируются через 15 мин.
                }
            });
        }
        return false;
    });

    // форма консультации
    

    $('#profconsultation-form').submit(function (e) {
        e.preventDefault();
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var form_data = form.serialize();
        var phone = form.find('input[name="phone"]');

        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Получить консультацию');

        } else {
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter48923588.reachGoal('ZakazZvonka');
                    _tmr.push({ id: '3031398', type: 'reachGoal', goal: 'ZakazZvonka' });
                    gtag('event', 'send', {'event_category': 'Event', 'event_action': 'Send', 'event_label': 'ZakazZvonka' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Cпасибо за заявку!<br>" + thankyouText + "</div>");
                        $('.fancybox-inner').css("height","auto");
                        $('.fancybox-inner').css("width","auto");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Получить консультацию');
                    }, 10000);
                }
            });
        }
        return false;
    });

    // форма бронирования цены

    $('#bronForm').submit(function (e) {
        e.preventDefault();
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var form_data = form.serialize();
        var phone = form.find('input[name="phone"]');

        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Забронировать');

        } else {
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter48923588.reachGoal('ZakazZvonka');
                    _tmr.push({ id: '3031398', type: 'reachGoal', goal: 'ZakazZvonka' });
                    gtag('event', 'send', {'event_category': 'Event', 'event_action': 'Send', 'event_label': 'ZakazZvonka' });
                    form.next('.info-block').fadeOut(300);
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Cпасибо за заявку!<br>" + thankyouText + "</div>");
                        $('.fancybox-inner').css("height","auto");
                        $('.fancybox-inner').css("width","auto");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        form.next('.info-block').fadeIn(300);
                        but.prop( 'disabled', false ).val('Забронировать');
                    }, 10000);
                }
            });
        }
        return false;
    });

    $('#mangalForm').submit(function(e) {
        e.preventDefault();
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var form_data = form.serialize();
        var phone = form.find('input[name="phone"]');

        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Забронировать');

        } else {
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter48923588.reachGoal('ZakazZvonka');
                    _tmr.push({ id: '3031398', type: 'reachGoal', goal: 'ZakazZvonka' });
                    gtag('event', 'send', {'event_category': 'Event', 'event_action': 'Send', 'event_label': 'ZakazZvonka' });
                    form.next('.info-block').fadeOut(300);
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Cпасибо за заявку!<br><span>" + thankyouText + "</span></div>");
                        $('.fancybox-inner').css("height","auto");
                        $('.fancybox-inner').css("width","auto");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Забронировать');
                    }, 10000);
                }
            });
        }
        return false;
    });

    // Форма выбора цвета
    
    $('#getColorForm').submit(function (e) {
        e.preventDefault();
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var form_data = form.serialize();
        var phone = form.find('input[name="phone"]');

        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Отправить');

        } else {
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter48923588.reachGoal('ZakazZvonka');
                    _tmr.push({ id: '3031398', type: 'reachGoal', goal: 'ZakazZvonka' });
                    gtag('event', 'send', {'event_category': 'Event', 'event_action': 'Send', 'event_label': 'ZakazZvonka' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Cпасибо за заявку!<br>"+ thankyouText +"</div>");
                        $('.fancybox-inner').css("height","auto");
                        $('.fancybox-inner').css("width","auto");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop('disabled', false);
                        but.val('Отправить');
                    }, 10000);
                }
            });
        }
        return false;
    });

    $('#close-popup-form').submit(function (e) {
        e.preventDefault();
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var form_data = form.serialize();
        var phone = form.find('input[name="phone"]');

        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Отправить');

        } else {
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter48923588.reachGoal('ZakazZvonka');
                    _tmr.push({ id: '3031398', type: 'reachGoal', goal: 'ZakazZvonka' });
                    gtag('event', 'send', {'event_category': 'Event', 'event_action': 'Send', 'event_label': 'ZakazZvonka' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Cпасибо за заявку!<br>"+ thankyouText +"</div>");
                        
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop('disabled', false);
                        but.val('Отправить');
                    }, 10000);
                }
            });
        }
        return false;
    });

});