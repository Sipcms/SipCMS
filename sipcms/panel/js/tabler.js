$(function(){
    $('.row_middle > div').each(function(){
        $(this).height($(this).parent().height() - parseInt($(this).css('paddingBottom')) - parseInt($(this).css('marginBottom'))  - parseInt($(this).css('paddingTop')) - parseInt($(this).css('marginTop')));
    });
});