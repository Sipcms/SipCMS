function ImageStrip(container, cellWidth, speed) {
    this.container = $(container);
    this.image = this.container.find('ul');
    
    this.cellWidth = cellWidth;

    this.speed = speed;
}

ImageStrip.prototype = {
    move: function(to) {
        var from = this.currentCell();

        if (from == to) {
            return false;
        }

        var newLeft = (this.cellWidth * (to - 1) * -1);

        if (this.speed > 0) {
            this.image.animate({ left: newLeft }, this.speed);
        }
        else {
            this.image.left(newLeft + 'px');
        }

        return true;
    },
    currentCell: function() {
        var left = this.image.css('left');
        if (left == 'auto') {
            left = 0;
        }
        else {
            left = parseInt(left);
        }

        return (left / this.cellWidth);
    }
}

