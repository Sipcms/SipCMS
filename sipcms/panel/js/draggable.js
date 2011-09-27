/*
 *
 * jQuery Draggable plugin
 * part of Movable Block positioning system
 *
 * Implements basic drag`n`drop movements
 * and eventing of initial caller
 *
 * Copyright (c) Angelika Phesnichnova, Vitaly Igonin, 2011
 * Copyright (c) IgoninLab, 2011
 *
 */

(function ($) {
    $.fn.draggable = function (options) {
        var settings = {
            beforeDrag: null,
            afterDrop: null
        };

        var isDragging = false;

        return this.each(function () {
            var $this = $(this);


            if (options) {
                $.extend(settings, options);
            }

            var data = $this.data('draggable');

            if (!data) {
                data = { isPressed: false, isDragging: false, initialCord: null };
                $this.data('draggable', data);
            }


            $this.mousedown(function (e) {
                data.isPressed = true;
                data.initialCord = $this.position();
                data.mouseCord = { x: e.pageX, y: e.pageY };
                data.coordDelta = { x: e.pageX - data.initialCord.left, y: e.pageY - data.initialCord.top };

                e.stopPropagation();
                return false;
            });

            $(window).mousemove(function (e) {
                if (data.isPressed) {
                    if (!data.isDragging) {
                        if (settings.beforeDrag)
                            settings.beforeDrag.call(this);

                        data.isDragging = true;
                        isDragging = true;
                    }

                    $this.css({
                        position: 'absolute',
                        left: e.pageX - data.coordDelta.x,
                        top: e.pageY - data.coordDelta.y,
                        'z-index': 1000
                    });

                    e.stopPropagation();
                    return false;
                }
            });

            $this.mouseup(function () {
                data.isPressed = false;
                if (data.isDragging) {
                    if (settings.afterDrop)
                        settings.afterDrop.call(this);

                    data.isDragging = false;
                    data.isPressed = false;
                    isDragging = false;
                }
            });
        });
    }
})(jQuery);