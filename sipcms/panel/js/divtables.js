$(function () {
    $('.divtable').each(function () {
        var table = $(this);
        var thead = $('> .thead', this);
        var headCels = $('> div', thead);

        headCels.addClass('headcell');

        //$(this).children('.row').children('div').addClass('cell');

        var rows = null;

        if($(this).children('#tableScrollOuter').length > 0){
            rows = $(this).children('#tableScrollOuter').children('#tableScrollInner').children('.row');
        }
        else
        {
            rows = $(this).children('.row');
        }

        rows.last().addClass('last');

        rows.each(function () {
            var cells = $(this).children('div');

            cells.addClass('cell');

            cells.each(function (i) {
                cell = headCels.eq(i);

                $(this).height($(this).parent().height() - parseInt($(this).css('paddingTop')) - parseInt($(this).css('paddingBottom')) - parseInt($(this).css('marginTop')) - parseInt($(this).css('marginBottom')) - 1);
                $(this).width(cell.width() - (parseInt($(this).css('paddingLeft')) - parseInt(cell.css('paddingLeft'))) - parseInt($(this).css('paddingRight')));


                if (table.hasClass('vmiddle')) {
                    var div = $('<div></div>');
                    div.html($(this).html());
                    div.css({ 'display': 'table-cell', 'vertical-align': 'middle', 'float': 'none' });
                    div.height($(this).height());
                    $(this).html('');
                    $(this).append(div);
                }
            });

            if($(this).hasClass('opened')){
                cells.first().css('padding-left', (parseInt(cells.first().css('paddingLeft')) - 1) + 'px');
                cells.last().width(cells.last().width() - 1);
            }
        });
    });
});