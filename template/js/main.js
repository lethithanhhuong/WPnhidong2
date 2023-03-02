/* Add rel="noopener" && class "external" for external link */



var links = document.getElementsByTagName('a'),
    i, length;
for (i = 0, length = links.length; i < length; i++) {
    var internal = location.host.replace("www.", "");
    internal = new RegExp(internal, "i");
    var link_host = links[i].host,
    link_href     = links[i].getAttribute("href");
    link_rel      = links[i].getAttribute("rel");
    link_class    = links[i].getAttribute("class");
    /* Add rel="noopener" && class "external" for external link */
    if ( !internal.test(link_host) 
        && (link_href != null) 
        && (link_href.substring(0, 1) != '#') 
        && (link_href.substring(0, 4) != 'tel:') 
        && (link_href.substring(0, 7) != 'mailto:') ) {

        links[i].setAttribute('target', '_blank');

        if (link_class) {
            links[i].setAttribute("class", 'external ' + link_class);
        } else {
            links[i].setAttribute("class", 'external');
        }

        links[i].setAttribute("rel", 'noopener ' + link_rel);

        if (link_rel && !link_rel.includes('noopener')) {
            links[i].setAttribute("rel", 'noopener ' + link_rel);
        } else {
            links[i].setAttribute("rel", 'noopener');
        }
    }
}

(function($) {

    // define easeInOutExpo
    $.easing.jswing = $.easing.swing;
    $.extend($.easing, {
        easeInOutExpo: function(x, t, b, c, d) {
            if (t == 0) return b;
            if (t == d) return b + c;
            if ((t /= d / 2) < 1) return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
            return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b;
        }
    });
    
    $('a.page-scroll').on('click', function(event) {
        $('ul.nav_menu li').removeClass('active');
        $(this).parent().addClass('active');
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 68
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

	var header = $(".head3");
    header_scrolled = "scrolled";
    head3_height = $('.head3').height();
	if (screen && screen.width >= 1169) {
	    $(window).scroll(function() {
	        if ($(this).scrollTop() > head3_height) {
	            header.addClass(header_scrolled);
	        } else {
	            header.removeClass(header_scrolled);
	        }
	    });
	}

   
    /* metu modal */
    $('.modal__click').click(function() {
        $('#' + $(this).attr('btn-id')).show();
    });

    $('.modal__close').click(function() {
        $('.modal_wrap').hide();
    });

    $(window).on('click', function(e) {
        if ($(e.target).is('.modal_wrap')) {
            $('.modal_wrap').hide();
        }
    });

   

    $('.external').children('img').parent().addClass('external_link_img');
 
    $('iframe').parent().addClass('iframe_parent');

})(jQuery);

