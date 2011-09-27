$(function () {
    $('input[type=checkbox].custom').each(function () {
        var input = $('<input type="hidden"/>');

        input.attr('name', $(this).attr('name'));
        input.attr('checked-value', $(this).attr('value'));
        input.attr('checked', $(this).attr('checked') ? false : true);

        var div = $('<div></div>');
        div.addClass('checkbox');

//        if (input.attr('checked')) {
//            div.addClass('checkbox-checked');
//        }

        div.append(input);

        div.bind('click', function () {
            $(this).toggleClass('checkbox-checked');

            $(this).parent().parent().toggleClass('selected');
            $(this).closest('.row').toggleClass('selected');

            _input = $(this).children('input');
            checked = !_input.attr('checked');
            //checked = !_input.attr('checked')
            //console.log(typeof checked);

            _input.attr('checked', checked);
            _input.attr('value', checked ? '' : _input.attr('checked-value'));
        });

        $(this).replaceWith(div);
    });
});