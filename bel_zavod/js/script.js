$(document).ready(function() {

    $('input[type="tel"]').inputmask({mask: "+7 (999) 999-99-99"});
    $('#slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '40px',
        arrows: true,
        responsive: [
            {
                breakpoint: 920,
                settings: {
                    centerPadding: 0
                }
            }
        ]
    });

    $('.white-block .btn').on('click', function(e) {
        e.preventDefault();
        $(this).closest('.item').addClass('opened');
        const scroll = $(this).closest('.item').find('.green-block').offset().top;
        $('body, html').animate({scrollTop: scroll}, 500);
    });
    $('.green-block .closed').on('click', function(e) {
        e.preventDefault();
        $(this).closest('.item').removeClass('opened');
    });

    $('.open-call-modal').on('click', function(e) {
        e.preventDefault();
        $('#modal-wrap').fadeIn();
        $('#call-modal').fadeIn();
    });

    $('.open-calc').on('click', function(e) {
        e.preventDefault();
        $('#modal-wrap').fadeIn();
        $('#calculator-modal').fadeIn();
    });
    $('.close').on('click', function(e) {
        e.preventDefault();
        $('#thankyou-modal').fadeOut();
        $('#call-modal').fadeOut();
        $('#calculator-modal').fadeOut();
        $('#modal-wrap').fadeOut();
    });

    $(document).on('click', function(e) {
        e.target === $('#modal-wrap')[0] ? $('.close').trigger('click') : true;
    });

    //calculator

    $('#calculator-modal nav .next').on('click', function(e) {
        e.preventDefault();
        $(this).closest('.step').hide().next('.step').show();
    });
    $('#calculator-modal nav .prev').on('click', function(e) {
        e.preventDefault();
        $(this).closest('.step').hide().prev('.step').show();
    });


    // send-form

    $('#catalog-form').on('submit', function(e) {
        e.preventDefault();
        const form = $(this);
        const btn = form.find('.btn');
        const btnText = btn.val();
        const phone_input = form.find('input[name="phone"]');
        const tel = phone_input.val().replace(/\D+/gim, '');
        const form_data = form.serialize();

        btn.prop('disabled', true).val('Отправка...');
        if(!tel || tel.length < 11) {
            phone_input.css({backgroundColor: '#ff0000'});
            setTimeout(function() {
                phone_input.css({backgroundColor: '#fff'});
            }, 500);
            btn.prop('disabled', false).val(btnText);
        }
        else {
            $.ajax({
                url: 'send.php',
                method: 'POST',
                data: form_data,
                cache: false,
                success: function() {
                    yaCounter46056327.reachGoal('ZakazZvonoka');
                    ga('send', 'event', 'Btn', 'Click', 'ZakazZvonoka');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'ZakazZvonoka' });
                    form.trigger('reset');
                    btn.prop('disabled', false).val(btnText);
                    window.location.href = window.location.href + 'catalog.php';
                }
            })
        }
    });

    $('#calc-form').on('submit', function(e) {
        e.preventDefault();
        const form = $(this);
        const btn = form.find('input[type="submit"]');
        const btnText = btn.val();
        const phone_input = form.find('input[name="phone"]');
        const tel = phone_input.val().replace(/\D+/gim, '');
        const form_data = form.serialize();

        btn.prop('disabled', true).val('Отправка...');
        if(!tel || tel.length < 11) {
            phone_input.css({backgroundColor: '#ff0000'});
            setTimeout(function() {
                phone_input.css({backgroundColor: '#fff'});
            }, 500);
            btn.prop('disabled', false).val(btnText);
        }
        else {
            $.ajax({
                url: 'send.php',
                method: 'POST',
                data: form_data,
                cache: false,
                success: function() {
                    yaCounter46056327.reachGoal('ZakazZvonoka');
                    ga('send', 'event', 'Btn', 'Click', 'ZakazZvonoka');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'ZakazZvonoka' });
                    form.trigger('reset');
                    btn.prop('disabled', false).val(btnText);
                    $('#calculator-modal').fadeOut();
                    $($('#calculator-modal').find('.step')[4]).hide();
                    $($('#calculator-modal').find('.step')[0]).show();
                    $('#thankyou-modal').fadeIn();
                    setTimeout(function() {
                        $('#calculator-modal').fadeOut();
                        $('#call-modal').fadeOut();
                        $('#thankyou-modal').fadeOut();
                        $('#modal-wrap').fadeOut();
                    }, 10000);
                }
            })
        }
    });

    $('.catalog-item-form').on('submit', function(e) {
        e.preventDefault();
        const form = $(this);
        const btn = form.find('.btn');
        const btnText = btn.val();
        const phone_input = form.find('input[name="phone"]');
        const tel = phone_input.val().replace(/\D+/gim, '');
        const form_data = form.serialize();

        btn.prop('disabled', true).val('Отправка...');
        if(!tel || tel.length < 11) {
            phone_input.css({backgroundColor: '#ff0000'});
            setTimeout(function() {
                phone_input.css({backgroundColor: '#fff'});
            }, 500);
            btn.prop('disabled', false).val(btnText);
        }
        else {
            $.ajax({
                url: 'send.php',
                method: 'POST',
                data: form_data,
                cache: false,
                success: function() {
                    yaCounter46056327.reachGoal('ZakazZvonoka');
                    ga('send', 'event', 'Btn', 'Click', 'ZakazZvonoka');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'ZakazZvonoka' });
                    form.trigger('reset');
                    btn.prop('disabled', false).val(btnText);
                    $('#modal-wrap').fadeIn();
                    $('#thankyou-modal').fadeIn();
                    setTimeout(function() {
                        $('#thankyou-modal').fadeOut();
                        $('#modal-wrap').fadeOut();
                    }, 10000);
                }
            })
        }
    });

    $('#call-form').on('submit', function(e) {
        e.preventDefault();
        const form = $(this);
        const btn = form.find('.btn');
        const btnText = btn.val();
        const phone_input = form.find('input[name="phone"]');
        const tel = phone_input.val().replace(/\D+/gim, '');
        const form_data = form.serialize();

        btn.prop('disabled', true).val('Отправка...');
        if(!tel || tel.length < 11) {
            phone_input.css({backgroundColor: '#ff0000'});
            setTimeout(function() {
                phone_input.css({backgroundColor: '#fff'});
            }, 500);
            btn.prop('disabled', false).val(btnText);
        }
        else {
            $.ajax({
                url: 'send.php',
                method: 'POST',
                data: form_data,
                cache: false,
                success: function() {
                    yaCounter46056327.reachGoal('ZakazZvonoka');
                    ga('send', 'event', 'Btn', 'Click', 'ZakazZvonoka');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'ZakazZvonoka' });
                    form.trigger('reset');
                    btn.prop('disabled', false).val(btnText);
                    $('#modal-wrap').fadeIn();
                    $('#call-modal').fadeOut();
                    $('#thankyou-modal').fadeIn();
                    setTimeout(function() {
                        $('#thankyou-modal').fadeOut();
                        $('#modal-wrap').fadeOut();
                    }, 10000);
                }
            })
        }
    });

    // осталось теплиц на складе
    // рандом от 15 до 35
    function getRndInteger(min, max) {
        return Math.floor(Math.random() * (max - min + 1) ) + min;
    }

    const count = localStorage.getItem('bel_zavod_t_count');
    const lastUpdateDate = localStorage.getItem('bel_zavod_t_update');
    const nowDate = new Date().getTime();
    const byDay = 24 * 60 * 60 * 1000;

    if (lastUpdateDate && lastUpdateDate <= nowDate - byDay) {
        let newCount = getRndInteger(15, 35);
        localStorage.setItem('bel_zavod_t_count', newCount);
        localStorage.setItem('bel_zavod_t_update', nowDate);
    }
    else {
        if (count) $('.sklad_count').text(count);
        else {
            let newCount = getRndInteger(15, 35);
            localStorage.setItem('bel_zavod_t_count', newCount);
            localStorage.setItem('bel_zavod_t_update', nowDate);
            $('.sklad_count').text(newCount);
        }
    }
    
});