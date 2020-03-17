/**
 * Created by Designer on 15.11.2016.
 */

//fancy
$(document).ready(function () {
    $('.fancy, .fancybox').fancybox();
});

//mask
$(document).ready(function(){
    $(function($){
        // $(".phone_mask").mask("+7(999)999-99-99");
        $(".phone_mask").click(function () {
            $(this).focus();
        });
    });
});

// gallery carousel

$('.gallery-carousel').owlCarousel({
    items: 1,
    nav: true,
    navText: ["&#10092;", "&#10093;"],
    loop: true
});

//Всплывашка при закрытии
// $(document).ready(function(timeout){
//     try {
//         setTimeout(function start_kmacomebacker() {
//             var comebacker = true;
//             $(window).on("mouseout", function (event) {
//                 if (event.pageY - $(window).scrollTop() < 1 && comebacker) {
//                     comebacker = false;
//                     $("#goout").trigger("click");
//                 }
//             });
//         }, timeout);
//     } catch (e) {
//     }
// });

// плавный скролл к якорю

$(document).ready(function() {
    $('.scrollTo').on('click', function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        var to = $(href).offset().top;
        $('body, html').animate({scrollTop: to}, 400);
    });
});

// выбор цвета всплывашка

$(document).ready(function() {
    var item = $('#getColor .checkbox-group .color');
    item.on('click', function() {
        $(this).toggleClass('active');
        if($(this).hasClass('active')) {
            $(this).find('input[type="checkbox"]').prop('checked', true);
        }
        else {
            $(this).find('input[type="checkbox"]').prop('checked', false);
        }
    });
});

//рандом осталось беседок
function getRandomArbitrary(min, max) {
    return Math.round(Math.random() * (max - min) + min);
}
$(document).ready(function() {
    $('#ostalos').text(getRandomArbitrary(8, 22));
});

//anchor scroll
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(document).scrollTop() > 210) {
            $("#backbutton").show(100);
            $('.utp .menu').addClass('fixed');
        } else {
            $("#backbutton").hide(100);
            $('.utp .menu').removeClass('fixed');
        }
    });
    $("#backbutton").click(function (e) {
        e.preventDefault();
        $("html,body").animate({scrollTop: 0}, 'fast');
        return false;
    });

});

/*Scroll*/
$(document).ready(function() {
    $('.anchorElement').click(function () {
        var el = $(this).attr('href');
        $('html').animate({
            scrollTop: $(el).offset().top - 50
        }, 1000);
    });
});

/*Select color customization*/
$(document).ready(function () {
    $( function() {
        $.widget( "custom.iconselectmenu", $.ui.selectmenu, {
            _renderItem: function( ul, item ) {
                var li = $( "<li>" ),
                    wrapper = $( "<div>", { text: item.label } );

                if ( item.disabled ) {
                    li.addClass( "ui-state-disabled" );
                }

                $( "<span>", {
                    style: item.element.attr( "data-style" ),
                    "class": "ui-icon " + item.element.attr( "data-class" )
                })
                    .appendTo( wrapper );

                return li.append( wrapper ).appendTo( ul );
            }
        });
        $('select[name=color]').iconselectmenu().iconselectmenu( "menuWidget").addClass( "ui-menu-icons avatar" );
    });
});

//Каталог - название модели input
$(document).ready(function () {
    $('.catalog input[name=model]').each(function (i,val) {
       var title = $(val).closest('.item').find('h3').text();
       $(val).val(title);
    });
});

//-------------------------------

//Изменение type у всплывашек
$(document).ready(function () {
    var kommerchForm = $('#kommerchForm');

    //Плюсы
    $('.pluses .plus .buttonKom').click(function () {
        kommerchForm.removeClass().addClass('plusClass');
        kommerchForm.find('input[name=sfera]').val('');
    });

    //Таблица сфера
    $('.uslugi table tr').click(function () {
        var sfera = $(this).find('.sfera').text();
        $('.uslugi .fancyTableGo').click();
        kommerchForm.removeClass().addClass('sferaClass');
        kommerchForm.find('input[name=sfera]').val(sfera);
    });
});
