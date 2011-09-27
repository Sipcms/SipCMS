$(function () {

    if ($.fn.jCarouselLite) {
        $('.scroll_load_fail .scrollHolder').jCarouselLite({
            circular: true,
            btnNext: ".arr_right",
            btnPrev: ".arr_left",
            visible: 8.5889
        });
    }

    panelTop = $('.toolPanel').offset().top;

    $(window).scroll(function () {
        if ($(window).scrollTop() >= panelTop) {
            $('.toolPanelHolder').css({ position: 'fixed', top: 0, 'z-index': 100 });
        }
        else {
            $('.toolPanelHolder').css({ position: 'relative', top: 'auto', 'z-index': 0 });
        }
    });

    $('#menu ul li ul').each(function () {
        $('li:last', this).addClass('last');
    });

    $('.up a').click(function () {
        $('html').animate({'scrollTop' : 0}, 300);
        return false;
    });
});