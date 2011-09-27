$(function(){
    $('.hoverable').hover(function(){
        $(this).toggleClass('hover');
    })

    $('.pressable').mousedown(function(){
        $(this).addClass('pressed');
    }).mouseup(function(){
        $(this).removeClass('pressed');
    });
});