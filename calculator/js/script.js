/**
 * Created by Viktoryia Vorozhun on 19.12.2017.
 */

$(document).ready(function() {
    var phoneStr = $('.phone_alloka').data('phone') || $('.phone_alloka').text();
    var link = $('.phone_alloka').closest('a.phone');
    phoneStr = decodeURI(phoneStr).replace(/\s/g, "");
    if(link) {
        link.attr('href', phoneStr);
    }
    
});

// Переключение экранов
function runEffect(hideScreen, showScreen) {

    showScreen.show();
    $('html,body').animate({
        scrollTop: $(showScreen).offset().top}, 1000);
    return false;
}

//Маска
$(document).ready(function(){
    $(function($){
        $("input[name=phone]").mask("+7(___)___-__-__");
    });
});

/*fancy*/
$(document).ready(function () {
    $(".fancy").fancybox({
        padding: 0
    });
});

/*chosen*/
// $(document).ready(function () {
//     $(".chosen-select").chosen();
// });

//Datepicker
$(document).ready(function () {
    ( function( factory ) {
        if ( typeof define === "function" && define.amd ) {

            // AMD. Register as an anonymous module.
            define( [ "../widgets/datepicker" ], factory );
        } else {

            // Browser globals
            factory( jQuery.datepicker );
        }
    }( function( datepicker ) {

        datepicker.regional.ru = {
            closeText: "Закрыть",
            prevText: "&#x3C;Пред",
            nextText: "След&#x3E;",
            currentText: "Сегодня",
            monthNames: [ "Январь","Февраль","Март","Апрель","Май","Июнь",
                "Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь" ],
            monthNamesShort: [ "Янв","Фев","Мар","Апр","Май","Июн",
                "Июл","Авг","Сен","Окт","Ноя","Дек" ],
            dayNames: [ "воскресенье","понедельник","вторник","среда","четверг","пятница","суббота" ],
            dayNamesShort: [ "вск","пнд","втр","срд","чтв","птн","сбт" ],
            dayNamesMin: [ "Вс","Пн","Вт","Ср","Чт","Пт","Сб" ],
            weekHeader: "Нед",
            dateFormat: "dd.mm.yy",
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: "" };
        datepicker.setDefaults( datepicker.regional.ru );

        return datepicker.regional.ru;

    } ) );
    $.datepicker.setDefaults( $.datepicker.regional[ "ru" ] );
    $( function() {
        var dateFormat = "dd.mm.yy",
            from = $( "#from" )
                .datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 1,
                    minDate: +0
                })
                .on( "change", function() {
                    to.datepicker( "option", "minDate", getDate( this ) );
                }),
            to = $( "#to" )
                .datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 1
                })
                .on( "change", function() {
                    from.datepicker( "option", "maxDate", getDate( this ) );
                });

        function getDate( element ) {
            var date;
            try {
                date = $.datepicker.parseDate( dateFormat, element.value );
            } catch( error ) {
                date = null;
            }

            return date;
        }
    } );
});

//Рандомайзер
function getRandomArbitrary(min, max) {
    return Math.random() * (max - min) + min;
}

//slider
$(document).ready(function () {
    $('#slider').slider({
        range: "min",
        min: 100,
        max: 10000,
        value: 1000,
        slide: function( event, ui ) {
            $('input[name="budget"]').val( ui.value );
        }
    });
   $('input[name="budget"]').val( $("#slider").slider("value"));

    $('input[name="budget"]').on( "change", function() {
        $("#slider").slider( "value", $(this).val() );
    });

});

//navigation
$(document).ready(function () {
    $('.startQuest').click(function () {
        var hideScreen = $(this).closest('.screen');
        var showScreen = hideScreen.next();
        runEffect(hideScreen, showScreen);
        return false;
    });

    $('.navigation .steps').click(function () {
        if($(this).closest('.screen').attr('id') !== 'screen8'){
            var hideScreen = $(this).closest('.screen');
            var showScreen = hideScreen.next();
            runEffect(hideScreen, showScreen);
            return false;
        }
    });

    $('#screen3 li').on('click', function() {
        // var hideScreen = $(this).closest('.screen');
        // var showScreen = hideScreen.next();
        // runEffect(hideScreen, showScreen);
        // return false;
    });
    $('#screen8 .quest .backtoQuest').click(function () {
        var hideScreen = $(this).closest('.screen');
        var showScreen = hideScreen.prev();
        runEffect(hideScreen, showScreen);
        return false;
    });

    $('.navigation .button2, .nextBottomBlock .button').click(function () {
        var hideScreen = $(this).closest('.screen');
        if ($(this).hasClass("prev")){
            var showScreen = hideScreen.prev();
            runEffect(hideScreen, showScreen);
        } else if ($(this).hasClass("next")){
            var showScreen = hideScreen.next();
            runEffect(hideScreen, showScreen);
        }
        return false;
    });

    $('#thankyou .closeThankYou').click(function () {
        $('#thankyou').hide();
        $('#kalkulatorForm .screen').hide();
        $('#kalkulatorForm').find('#screen1').show();
    });
});

//Отмен нажатия по кнопке "назад"
$(document).ready(function () {
    history.pushState(null, null, location.href);
    window.onpopstate = function(event) {
        history.go(1);
    };
});

//Вызов формы заказ звонка
$(document).ready(function () {
    $('.stickerCall').click(function () {
       $(this).hide();
       $('.callWind').show("slow");
    });
    $('.callWind .close').click(function () {
        $('.callWind').hide();
        $('.stickerCall').show("slow");
    });
    $('.stickerWindownum').click(function () {
        $('.stickerCall').hide();
        $('.callWind').show("slow");
    });
    $('.stickerRassr').click(function () {
        $('.stickerCall').hide();
        $('.callWind').show("slow");
    });
    $('#screen6 .consult').click(function () {
        $('.stickerCall').hide();
        $('.callWind').show("slow");
    });
});

/***********************/

//Что планируете выращивать в теплице?
$(document).ready(function () {
    $('#screen2 .quest ul li .choose input').change(function () {
        //Стилизация блоков
        $('#screen2 .quest ul li .choose').removeClass('selected');
        $('#screen2 .quest ul li .choose input:checked').closest('.choose').addClass('selected');
    });
});

//Какой длины необходима теплица?
$(document).ready(function () {
    $('#screen3 .quest ul li .choose input').change(function () {
        //Стилизация блоков
        $('#screen3 .quest ul li .choose').removeClass('selected');
        $('#screen3 .quest ul li .choose input:checked').closest('.choose').addClass('selected');
        var hideScreen = $(this).closest('.screen');
        var showScreen = hideScreen.next();
        runEffect(hideScreen, showScreen);
        // return false;
    });
});

//В какой регион покупаете теплицу?
$(document).ready(function () {
    $('#screen4 .quest ul li input').change(function () {
        $('#screen4 .quest ul li').removeClass('selected');
        $('#screen4 .quest ul li input:checked').closest('li').addClass('selected');
        var hideScreen = $(this).closest('.screen');
        var showScreen = hideScreen.next();
        runEffect(hideScreen, showScreen);
    });
});

//В какой бюджет планируете вложиться?
$(document).ready(function () {
    $('#screen5 .quest ul li input').change(function () {
        $('#screen5 .quest ul li').removeClass('selected');
        $('#screen5 .quest ul li input:checked').closest('li').addClass('selected');
    });
});

//Выберите дополнительные параметры
$(document).ready(function () {
    $('#screen6 .quest ul li .choose input').change(function () {
        if($(this).attr('id')==='nothingdop'){
            if($(this).prop('checked')){
                $('#screen6 .quest ul li.selected').removeClass('selected').find('input').prop('checked',false);
                $(this).closest('li').addClass('selected');
            } else {
                $(this).closest('li').removeClass('selected');
            }
        } else {
            if($('#nothingdop').prop('checked')){
                $('#nothingdop').closest('li').removeClass('selected').find('input').prop('checked',false);
            }
            if($(this).prop('checked')){
                $(this).closest('li').addClass('selected');
            } else {
                $(this).closest('li').removeClass('selected');
            }
        }
    });
});

//Агрегатор
$(document).ready(function () {
    $('#screen6 .next, #screen6 .navigation ul, #screen6 .nextBottomBlock .next').click(function () {
        //Теплицу для выращивания
        $("#screen7 .fullproducts").text('');

        $('#screen2 input[type="checkbox"]:checked').each(function () {
            $("#screen7 .fullproducts").append($(this).val() + ", ");
        });
        if($("#screen7 .fullproducts").text().length == 0){
            $("#screen7 .fullproducts").text('не выбрано');
        } else{
            var zap  = $("#screen7 .fullproducts").text().slice(0,-2);
            $("#screen7 .fullproducts").text(zap);
        }

        //Длину теплицы:
        var fulllength = $('#screen3 input[name="length"]:checked').val();
        if(!fulllength){
            fulllength = 'не выбрано';
        }
        $('#screen7 .fulllength').text(fulllength);

        //Доставку в:
        var fullregion = $('#screen4 input[name="region"]:checked').val();
        if(!fullregion){
            fullregion = 'не выбрано';
        }
        $('#screen7 .fullregion').text(fullregion);

        //Стоимостью:
        var fullprice = $('#screen5 input[name="price"]:checked').val();
        if(!fullprice){
            fullprice = 'не выбрано';
        }
        $('#screen7 .fullprice').text(fullprice);

        //Дополнительно:
        $("#screen7 .fulldopolnitelno").text('');

        $('#screen6 input[type="checkbox"]:checked').each(function () {
            $("#screen7 .fulldopolnitelno").append($(this).val() + ", ");
        });
        if($("#screen7 .fulldopolnitelno").text().length == 0){
            $("#screen7 .fulldopolnitelno").text('не выбрано');
        } else{
            var dop  = $("#screen7 .fulldopolnitelno").text().slice(0,-2);
            $("#screen7 .fulldopolnitelno").text(dop);
        }

    });
});

//Идёт поиск вариантов
$(document).ready(function () {
    $('#screen6 .next, #screen6 .navigation ul, #screen6 .nextBottomBlock .button').click(function () {
        function animateBar(){
            console.log('start animation');
            $("#screen7 .progressBar .linebar .bar").animate({
                width: "100%"
            }, 3000,function() {
                $('#screen7 .progressBar .text').text('Готово!');
                runEffect($('#screen7'), $('#screen8'));
            })
        }
        setTimeout(animateBar, 1000);
    });
});

//Развернуть все экраны
$(document).ready(function () {
    $('.showAllBlocks').click(function () {
        $('#kalkulator').find('.screen').show();
    });
});

//Отправка форм
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

    var zvonokForm = $('#zvonokForm');
    var zvonokFormType = zvonokForm.find('input[name=type]');

    $('#screen1 header .button, .screen .header .button, #thankyou header .button').click(function () {
        zvonokForm.removeClass().addClass('callClass');
        zvonokFormType.val('Заказ звонка');
    });

    $('#screen3 .nota .text .button').click(function () {
        zvonokForm.removeClass().addClass('consultationClass');
        zvonokFormType.val('Заказ консультации специалиста');
    });


    $('#callForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $('#callForm');
        var phone = $('#callForm').find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().replace(/[^0-9]/g,'').length < 11) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Заказать звонок');
        }
        else {
            $.ajax({
                type: "POST",
                url: "calculator/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    
                    yaCounter46056327.reachGoal('CalculatorZakazZvonkaVsplivashka');
                    ga('send', 'event', 'Btn', 'Click', 'CalculatorZakazZvonkaVsplivashka');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'CalculatorZakazZvonkaVsplivashka' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $('.callWind .title').hide();
                        $(this).after("<div class='thankYou'>Спасибо за заявку.<br> В ближайшее время мы свяжемся с Вами</div>");
                    });
                    setTimeout(function () {
                        $('.callWind').hide();
                        $('.callWind .title').show();
                        $('.stickerCall').show('slow');
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Заказать звонок');
                    }, 10000);

                }

            });
        }
        return false;
    });
    $('#zvonokForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^0-9]/g,'').length < 11) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Заказать звонок');
        }
        else {
            $.ajax({
                type: "POST",
                url: "calculator/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    
                    if(form.hasClass('callClass')){
                        yaCounter46056327.reachGoal('CalculatorZakazZvonoka');
                        _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'CalculatorZakazZvonoka' });
                        ga('send', 'event', 'Btn', 'Click', 'CalculatorZakazZvonoka');
                    } else if (form.hasClass('consultationClass')){
                        yaCounter46056327.reachGoal('CalculatorConsultation');
                        ga('send', 'event', 'Btn', 'Click', 'CalculatorConsultation');
                        _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'CalculatorConsultation' });
                    }
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Спасибо за заявку.<br> В ближайшее время мы свяжемся с Вами</div>");
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
    $('#kalkulatorForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        $('#screen8 .alert').hide();
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $('#kalkulatorForm');
        var phone = $('#kalkulatorForm').find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().replace(/[^0-9]/g,'').length < 11) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            $('#screen8 .alert').show("slow").effect("shake", 500);
            but.prop( 'disabled', false ).val('Получить варианты теплиц по низким ценам');
        }

        else {
            $.ajax({
                type: "POST",
                url: "calculator/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    
                    yaCounter46056327.reachGoal('CalculatorStoimostFinal');
                    ga('send', 'event', 'Btn', 'Click', 'CalculatorStoimostFinal');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'CalculatorStoimostFinal' });
                    $('.screen').fadeOut(300, function () {
                        form.trigger('reset');
                        $('#thankyou').show();
                        $('.stickerCall').show();
                    });
                }
            });
        }
        return false;
    });
    
    $('#get-catalog-form').submit(function () {
        var but = $(this).find('input[type="submit"]');
        
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().replace(/[^0-9]/g,'').length < 11) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Получить ссылку');
        }

        else {
            $.ajax({
                type: "POST",
                url: "calculator/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter46056327.reachGoal('CalculatorStickersOnTheMain');
                    ga('send', 'event', 'Btn', 'Click', 'CalculatorStickersOnTheMain');
                    form.trigger('reset');
                    but.prop( 'disabled', false ).val('Получить ссылку');
                    $('#get-catalog').find('.fancybox-close-small').trigger('click');
                    window.open('http://belteplicy.ru/CatalogBelTeplic.pdf', '_blank');
                }
            });
        }
        return false;
    });

    $('#rassrochka-form').submit(function () {
        var but = $(this).find('input[type="submit"]');
        
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().replace(/[^0-9]/g,'').length < 11) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Рассчитать платеж');
        }

        else {
            $.ajax({
                type: "POST",
                url: "calculator/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    
                    yaCounter46056327.reachGoal('CalculatorStickersOnTheMain');
                    ga('send', 'event', 'Btn', 'Click', 'CalculatorStickersOnTheMain');
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Спасибо за заявку.<br> В ближайшее время мы свяжемся с Вами</div>");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Рассчитать платеж');
                    }, 10000);
                }
            });
        }
        return false;
    });

    $('#pensioners-form').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().replace(/[^0-9]/g,'').length < 11) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Получить скидку');
        }

        else {
            $.ajax({
                type: "POST",
                url: "calculator/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter46056327.reachGoal('CalculatorStickersOnTheMain');
                    ga('send', 'event', 'Btn', 'Click', 'CalculatorStickersOnTheMain');
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Спасибо за заявку.<br> В ближайшее время мы свяжемся с Вами</div>");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Получить скидку');
                    }, 10000);
                }
            });
        }
        return false;
    });
});