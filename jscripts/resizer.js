// jQuery.naturalWidth / jQuery.naturalHeight plugin for (already-loaded) images

// Triple-licensed: Public Domain, MIT and WTFPL license - share and enjoy!

(function($) {
  function img(url) {
    var i = new Image;
    i.src = url;
    return i;
  }

  if ('naturalWidth' in (new Image)) {
    $.fn.naturalWidth  = function() { return this[0].naturalWidth; };
    $.fn.naturalHeight = function() { return this[0].naturalHeight; };
    return;
  }
  $.fn.naturalWidth  = function() { return img(this[0].src).width; };
  $.fn.naturalHeight = function() { return img(this[0].src).height; };
})(jQuery);

$(document).ready(function() {
    function imageLoaded() {
        var resizelang = 'Click on this image to display the full size version.';
        var resizedsize =  $(this).width();
        var origsize = $(this).naturalWidth();
        if (origsize!=resizedsize) {
            $(this).wrap('<div></div>').attr('title', resizelang).on('click', function() {
                if ($(this).is('[title]')) {
                    $(this).removeAttr('title');
                }
                else {
                    $(this).attr('title', resizelang);
                } 
                var parentheight = $(this).parent().height();
                if (!$(this).hasClass('resize')) {
                    $(this).addClass('resize').parent().css('height', parentheight+'px');
                }
                else
                {
                    $(this).removeAttr('class').parent().css('height', '');
                }
            });
        }
    }
    $('.scaleimages img').each(function() {
        if( this.complete ) {
            imageLoaded.call( this );
        } else {
            $(this).one('load', imageLoaded);
        }
    });
}); 