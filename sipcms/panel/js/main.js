$(document).ready(function(){
    /****************************************************************/
    $('.thead .checkbox').live('click',function(){
        var cd = $(this).attr('class').split(' ');
        if(cd[1] == 'checkbox-checked')
        {
            $('.row .checkbox').each(function(i){
                $(this).addClass('checkbox-checked');
            });
        }else{
            $('.row .checkbox').each(function(i){
                $(this).removeClass('checkbox-checked');
            });
        }
    });
    /****************************************************************/
    /****************************************************************/
    $('.row').live('click',function(){
        var atr_class = $(this).children('div').children('.checkbox').attr('class');
        var state = typeof $(this).children('div').children('.state_pub').attr('class') == 'undefined' ? $(this).children('div').children('.state_unpub').attr('class') : $(this).children('div').children('.state_pub').attr('class');
        spl = atr_class.split(' ');
        if(spl[1] == 'checkbox-checked')
        {
            if(state == 'state_pub')
            {
                $('#no_publication').css({
                    display: 'block'
                });
            }
            if(state == 'state_unpub')
            {
                $('#publication').css({
                    display: 'block'
                });
            }
        }
        if(typeof spl[1] == 'undefined')
        {
            if(state == 'state_pub')
            {
                $('#no_publication').css({
                    display: 'none'
                });
            }
            if(state == 'state_unpub')
            {
                $('#publication').css({
                    display: 'none'
                });
            }
        }
        var count_check = $('.row .checkbox-checked').size();
    
        if(count_check == '1')
        {
            $('#edit_news').css({
                display: 'block'
            });
        }
        if(count_check == '0' || count_check > 1)
        {
            $('#edit_news').css({
                display: 'none'
            });
        }
    });
    /****************************************************************/
    $('#publication').live('click',function(){
        var count_check = $('.row .checkbox-checked').size();
        href = $(this).children('a').attr('href');
        _self = this;
        //var state = typeof $(this).children('div').children('.state_pub').attr('class') == 'undefined' ? $(this).children('div').children('.state_unpub').attr('class') : $(this).children('div').children('.state_pub').attr('class');
        $('.row .checkbox-checked').each(function(i){
            self = this;
            state = $(this).parent().parent().children('div').children('.state_unpub').attr('class');
            value = $(this).children('input').attr('value');
            if(state == 'state_unpub')
            {
                $.ajax({
                    url: href,
                    type: 'POST',
                    data:{
                        val: value
                    },
                    beforeSend: function(){
                        console.log('BEFORE');
                    },
                    success: function(){
                        $(self)
                        .parent()
                        .parent()
                        .children('div')
                        .children('.state_unpub')
                        .removeClass('state_unpub')
                        .addClass('state_pub');
                        $(_self).css({
                            display: 'none'
                        });
                        console.log('SUCCESS');
                    }
                });
            }
            //console.log(ii);
        });
        
        return false;
    });
    
    
    
   
    
});