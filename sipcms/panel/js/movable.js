/*
 *
 * jQuery Movable plugin
 * Blocks positioning system
 * @requires jQuery Draggable plugin (part of this system)
 *
 * Initiates block movements using draggable subsystem
 * Positions blocks to columns
 * Creates blocks placeholders during d`n`d movement
 *
 * Copyright (c) Angelika Phesnichnova, Vitaly Igonin, 2011
 * Copyright (c) IgoninLab, 2011
 *
 */

(function ($) {
    $.fn.movable = function (options) {
        var settings = {
            columns: null
        };

        if (typeof $.fn.draggable == "undefined") {
            alert('Draggable subsystem not found, Movable system cant work without it');
            return this;
        }



        if (options.enable) {
            return this.each(function () {
                if (options) {
                    $.extend(settings, options);
                }

                var $this = $(this);

                var divs = [];
                var div = null;

                $this.css('cursor', 'move');

                $this.draggable({
                    beforeDrag: function (i) {
                        var notLast = $this.next().length > 0;

                        $.each(settings.columns, function (i) {
                            var div = $('<div></div>');
                            div.addClass('block').addClass('blockplace').height($this.height());

                            $(settings.columns[i]).append(div);
                            divs.push(div);
                        });

                        if (notLast) {
                            div = $('<div></div>');
                            div.addClass('block').addClass('blockplace').height($this.height());
                            $this.after(div);
                            div.show();
                        }
                    },
                    afterDrop: function () {
                        mPos = $this.offset();
                        mCenter = { x: mPos.left + $this.width() / 2, y: mPos.top + $this.height() / 2 };

                        while (divs.length > 0) {
                            var localDiv = divs.pop();

                            pos = localDiv.offset();
                            center = { x: pos.left + localDiv.width() / 2, y: pos.top + localDiv.height() / 2 };

                            if (Math.abs(mCenter.x - center.x) <= localDiv.width() / 2 && Math.abs(mCenter.y - center.y) <= localDiv.height() / 2) {
                                $this.replaceAll(localDiv);
                            }
                            else {
                                localDiv.remove();
                            }
                        }

                        

                        $('.block').not('.blockplace').not($this).each(function () {
                            var localDiv = $(this);

                            pos = localDiv.offset();
                            center = { x: pos.left + localDiv.width() / 2, y: pos.top + localDiv.height() / 2 };

                            if (Math.abs(mCenter.x - center.x) <= $this.width() / 2 && Math.abs(mCenter.y - center.y) <= $this.height() / 2) {
                                tmpDiv = $('<div></div>');

                                $this.before(tmpDiv);
                                localDiv.before($this);
                                tmpDiv.after(localDiv);
                                tmpDiv.remove();

                                return false;
                            }
                        });

                        $this.css({ 'position': 'relative', 'top': 'auto', left: 'auto', 'z-index': 'auto' });

                        if (div) {
                            div.remove();
                            div = null;
                        }
                    }
                });
            });
        }
        else {
            this.css('cursor', 'inherit');
            this.unbind();
            this.data('draggable', false);
        }
    }
})(jQuery);