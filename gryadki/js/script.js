$(document).ready(function() {
    $('.fancy').fancybox({
        transitionIn: 'elastic',
        transitionOut: 'elastic'
    });
    $('#catalog-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        adaptiveHeight: true,
        slide: '.item'
    });
    $('#catalog-slider').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
        let title = $($('#catalog-slider .item')[nextSlide + 1]).data('title');
        let count = $($('#catalog-slider .item')[nextSlide + 1]).data('count');
        $('#calc-form>h2 span').text(title);
        $('.zakaz-sticker span').text(count);
        $('#calc-form').find('input[name="type"]').val('Калькулятор - стоимость грядки ' + title);
    });

    $('#gallery-slider').slick({
        rows: 2,
        slidesPerRow: 3,
        arrows: true,
        dots: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesPerRow: 2
                }
            }
        ]
    });
    $('input[type="tel"]').inputmask({
        mask: "+7(999)999-99-99"
    });
});


// отправка форм

$(document).ready(function() {
    $('#catalog-form').on('submit', function(e) {
        e.preventDefault();
        let form = $(this);
        let phoneInput = form.find('input[name="phone"]');
        let phoneNum = phoneInput.val().replace(/[^0-9]/gim, "");
        let btn = form.find('input[type="submit"]');
        let btnText = btn.val();

        let form_data = form.serialize();

        btn.prop('disabled', true).val('Отправка...');
        if(phoneNum.length < 11) {
            phoneInput.css({backgroundColor: '#ff0000'});
            btn.prop('disabled', false).val(btnText);
            setTimeout(function() {
                phoneInput.css({backgroundColor: "#ffffff"});
            }, 500);
        }
        else {
            $.ajax({
                url: 'send.php',
                method: 'POST',
                chache: false,
                data: form_data,
                success: function() {
                    ym(55175203, 'reachGoal', 'go_to_catalog');
                    gtag('event', 'send', {'event_category': 'Event', 'event_action': 'Send', 'event_label': 'go_to_catalog' });
                    _tmr.push({ id: '3137985', type: 'reachGoal', goal: 'go_to_catalog' });
                    form.trigger('reset');
                    btn.val(btnText);
                    window.location.href = window.innerWidth >= 768 ? "http://belteplicy.ru/gryadki/Griadki_price3.pdf" : "http://belteplicy.ru/gryadki/Price_mobile3.pdf";
                }
            });
        }
    });

    $('#calc-form').on('submit', function(e) {
        e.preventDefault();
        let form = $(this);
        let form_data = form.serialize();
        let phoneInput = form.find('input[name="phone"]');
        let phoneNum = phoneInput.val().replace(/[^0-9]/gim, "");
        let btn = form.find('input[type="submit"]');
        let btnText = btn.val();

        btn.prop('disabled', true).val('Отправка...');
        if(phoneNum.length < 11) {
            btn.prop('disabled', false).val(btnText);
            phoneInput.css({backgroundColor: '#ff0000'});
            setTimeout(function() {
                phoneInput.css({backgroundColor: '#ffffff'});
            }, 500);
        }
        else {
            $.ajax({
                url: 'send.php',
                method: 'POST',
                data: form_data,
                cache: false,
                success: function() {
                    ym(55175203, 'reachGoal', 'calculate');
                    gtag('event', 'send', {'event_category': 'Event', 'event_action': 'Send', 'event_label': 'calculate' });
                    _tmr.push({ id: '3137985', type: 'reachGoal', goal: 'calculate' });
                    form.trigger('reset');
                    btn.prop('disabled', false).val(btnText);
                    $('.calc-form .inner, .calc-form .sticker').fadeOut(300, function() {
                        $('.calc-form .thankyou').fadeIn();
                    });
                    setTimeout(function() {
                        $('.calc-form .thankyou').fadeOut(300, function() {
                            $('.calc-form .inner, .calc-form .sticker').fadeIn();
                        });
                    }, 10000);
                }
            });
        }
    });

    $('#catalog-form2').on('submit', function(e) {
        e.preventDefault();
        let form = $(this);
        let phoneInput = form.find('input[name="phone"]');
        let phoneNum = phoneInput.val().replace(/[^0-9]/gim, "");
        let btn = form.find('input[type="submit"]');
        let btnText = btn.val();

        let form_data = form.serialize();

        btn.prop('disabled', true).val('Отправка...');
        if(phoneNum.length < 11) {
            phoneInput.css({backgroundColor: '#ff0000'});
            btn.prop('disabled', false).val(btnText);
            setTimeout(function() {
                phoneInput.css({backgroundColor: "#ffffff"});
            }, 500); 
        }
        else {
            $.ajax({
                url: 'send.php',
                method: 'POST',
                chache: false,
                data: form_data,
                success: function() {
                    ym(55175203, 'reachGoal', 'яр3');
                    gtag('event', 'send', {'event_category': 'Event', 'event_action': 'Send', 'event_label': 'яр3' });
                    _tmr.push({ id: '3137985', type: 'reachGoal', goal: 'яр3' });
                    form.trigger('reset');
                    btn.val(btnText);
                    window.location.href = window.innerWidth >= 768 ? "http://belteplicy.ru/gryadki/Griadki_price3.pdf" : "http://belteplicy.ru/gryadki/Price_mobile3.pdf";
                }
            });
        }
    });
});