$(function () {
    var blocks = $('.block').not('.widget').hide();

    $('.widget').hide();

    currentBlock = 0;

    function showBlock() {
        currentBlock++;
        if (currentBlock >= blocks.length) return;

        blocks.eq(currentBlock).fadeIn(1000, showBlock);
    };

    blocks.first().fadeIn(1000, showBlock);

    $('.button_save, .set, .close').hide();
    $('.toolPanel').hide().fadeIn(1000);


    function enableEditor() {
        $('.button_save, .set, .close').show();

        $('.block').not('.widget').movable({
            columns: ['.leftcol', '.rightcol'],
            enable: true
        });
    }

    function disableEditor() {
        $('.button_save, .set, .close').hide();
        $('.block').not('.widget').movable({ 'enable': false });
    }

    $('.consol').click(function () {
        enableEditor();
    });

    $('.btnSave').click(function () {
        disableEditor();
    });

    $('.btnCancel').click(function () {
        disableEditor();
    });

    $('.close').click(function () {
        $(this).closest('.block').fadeOut(1000, function () {
            if(!$(this).hasClass('widget'))
                $(this).remove();
        });


    });

    $('.set').live('click', function(){
        $('.widget').fadeIn(1000);
    });
});