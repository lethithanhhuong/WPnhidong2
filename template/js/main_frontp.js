!function () { var t = document.createElement("script"); t.src = "https://www.youtube.com/player_api"; var e = document.getElementsByTagName("script")[0]; e.parentNode.insertBefore(t, e); for (var a = [], d = document.querySelectorAll(".ytb_lazy"), r = 0; r < d.length; r++) { var i = "https://i.ytimg.com/vi/" + d[r].dataset.embed + "/" + d[r].dataset.thumb + "default.jpg", n = new Image; n.setAttribute("src", i), n.setAttribute("alt", d[r].dataset.title), n.addEventListener("load", void d[r].appendChild(n)), d[r].addEventListener("click", function () { for (var t = 0; t < a.length; ++t)a[t].stopVideo(); a[t] = new YT.Player(this, { videoId: this.dataset.embed, playerVars: { rel: 0 }, events: { onReady: o } }) }) } function o(t) { t.target.playVideo() } }(), function () { for (var t = document.querySelectorAll(".ytb__thumb"), e = 0; e < t.length; e++) { var a = "https://i.ytimg.com/vi/" + t[e].dataset.embed + "/" + t[e].dataset.thumb + "default.jpg", d = new Image; d.src = a, d.setAttribute("alt", t[e].dataset.title), d.addEventListener("load", void t[e].appendChild(d)) } }();
(function ($) {

    /** Convert Metaslider to Owl Carousel Lazy Load  */
    $('.ml-slider.slide-home .slides').addClass('owl-carousel owl-theme');
    $('.ml-slider.slide-home .owl-carousel li').addClass('item').css('display', 'initial');
    $('.ml-slider.slide-home .owl-carousel .item img').addClass('owl-lazy');
    $('.ml-slider.slide-home .owl-carousel .owl-lazy').each(function () {
        $(this).attr('data-src', $(this).attr('src')).removeAttr('src');
    });

    $('.ml-slider.slide-home .owl-carousel').owlCarousel({
        margin: 0,
        loop: false,
        autoWidth: false,
        autoHeight: false,
        nav: false,
        dots: true,
        items: 1,
        lazyLoad: true,
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>',
        ],
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 5000,
    });

    $('.frontp3__row2__col1 .owl-carousel').owlCarousel({
        loop: false,
        nav: true,
        lazyLoad: true,
        responsiveClass: true,
        responsive: {
            0: {
                dots: true,
                items: 1,
            },
            1169: {
                dots: false,
                items: 1,
            },
        },
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>',
        ],
        // autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 5000,
    });

    $('.frontp5__row2 .tab__click').click(function () {
        var tab_id = $(this).attr('data-tab');

        $(this).parent().find('.tab__click').removeClass('active');
        $(this).parents('.frontp5__row2').find('.tab__wrap').removeClass('active');

        $(this).addClass('active');
        $("#" + tab_id).addClass('active');
    });

    $('.frontp6__row2__owl .owl-carousel').owlCarousel({
        items: 1,
        margin: 0,
        loop: false,
        lazyLoad: true,
        center: true,
        dots: false,
        URLhashListener: true,
        autoplayHoverPause: true,
        startPosition: 'URLHash',
        nav: true,
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>',
        ],
        onTranslate: function (event) {
            history.pushState("", document.title, window.location.pathname);
            var currentSlide, player, command;
            currentSlide = $('.owl-item.center');
            player = currentSlide.find("iframe").get(0);
            command = {
                "event": "command",
                "func": "stopVideo"
            };
            if (player != undefined) {
                player.contentWindow.postMessage(JSON.stringify(command), "*");
            }
        }
    });

    $('.frontp6__row2__owl_thumb .item a').click(function () {
        $(this).parents('.frontp6__row2__owl_thumb').find('.item a').removeClass('active');
        $(this).addClass('active');
    });

    $('.frontp8__row2__col__1 .tab__click').click(function () {
        var tab_id = $(this).attr('data-tab');

        $(this).parent().find('.tab__click').removeClass('active');
        $(this).parents('.frontp8__row2__col__1').find('.tab__wrap').removeClass('active');

        $(this).addClass('active');
        $("#" + tab_id).addClass('active');
    });

    $('.frontp8__row2__col__2 .tab__click').click(function () {
        var tab_id = $(this).attr('data-tab');

        $(this).parent().find('.tab__click').removeClass('active');
        $(this).parents('.frontp8__row2__col__2').find('.tab__wrap').removeClass('active');

        $(this).addClass('active');
        $("#" + tab_id).addClass('active');
    });

    /*$( ".gallery-icon a" ).each(function( index ) {
        $( ".gallery-icon a" ).attr( "data-fancybox", "gallery" );
        $(this).attr( "href", $(this).find('img').attr('src') );
    });*/

    var sync1 = $(".frontp8_1__owl__row1");
    var sync2 = $(".frontp8_1__owl__row2");
    //var slidesPerPage = 6; //globaly define number of elements per page
    var syncedSecondary = true;
    sync1.owlCarousel({
        loop: true,
        items: 1,
        lazyLoad: true,
        slideSpeed: 2000,
        nav: false,
        dots: false,
        // autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveRefreshRate: 200,
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>',
        ],
    }).on('changed.owl.carousel', syncPosition);
    sync2.on('initialized.owl.carousel', function () {
        sync2.find(".owl-item").eq(0).addClass("current");
    })
        .owlCarousel({
            loop: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 4,
                    margin: 4,
                    slideBy: 2,
                },
                1170: {
                    items: 4,
                    margin: 8,
                    slideBy: 2,
                },
            },
            lazyLoad: true,
            dots: false,
            nav: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>',
            ],
            smartSpeed: 200,
            slideSpeed: 500,
            responsiveRefreshRate: 100
        }).on('changed.owl.carousel', syncPosition2);

    function syncPosition(el) {
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);
        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }
        sync2.find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();
        if (current > end) {
            sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
            sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
    }

    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            sync1.data('owl.carousel').to(number, 100, true);
        }
    }
    sync2.on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number = $(this).index();
        sync1.data('owl.carousel').to(number, 300, true);
    });

    /* ==================================================================== */

    var sync3 = $(".frontp8_1__owl__row3");
    var sync4 = $(".frontp8_1__owl__row4");
    //var slidesPerPage = 6; //globaly define number of elements per page
    var syncedSecondary = true;
    sync3.owlCarousel({
        loop: true,
        items: 1,
        lazyLoad: true,
        slideSpeed: 2000,
        nav: false,
        dots: false,
        // autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveRefreshRate: 200,
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>',
        ],
    }).on('changed.owl.carousel', syncPosition);
    sync4.on('initialized.owl.carousel', function () {
        sync4.find(".owl-item").eq(0).addClass("current");
    })
        .owlCarousel({
            loop: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 4,
                    margin: 4,
                    slideBy: 2,
                },
                1170: {
                    items: 4,
                    margin: 8,
                    slideBy: 2,
                },
            },
            lazyLoad: true,
            dots: false,
            nav: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>',
            ],
            smartSpeed: 200,
            slideSpeed: 500,
            responsiveRefreshRate: 100
        }).on('changed.owl.carousel', syncPosition2);

    function syncPosition(el) {
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);
        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }
        sync4.find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = sync4.find('.owl-item.active').length - 1;
        var start = sync4.find('.owl-item.active').first().index();
        var end = sync4.find('.owl-item.active').last().index();
        if (current > end) {
            sync4.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
            sync4.data('owl.carousel').to(current - onscreen, 100, true);
        }
    }

    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            sync3.data('owl.carousel').to(number, 100, true);
        }
    }
    sync4.on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number = $(this).index();
        sync3.data('owl.carousel').to(number, 300, true);
    });

    /* ==================================================================== */

    var sync5 = $(".frontp8_1__owl__row5");
    var sync6 = $(".frontp8_1__owl__row6");
    //var slidesPerPage = 6; //globaly define number of elements per page
    var syncedSecondary = true;
    sync5.owlCarousel({
        loop: true,
        items: 1,
        lazyLoad: true,
        slideSpeed: 2000,
        nav: false,
        dots: false,
        // autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveRefreshRate: 200,
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>',
        ],
    }).on('changed.owl.carousel', syncPosition);
    sync6.on('initialized.owl.carousel', function () {
        sync6.find(".owl-item").eq(0).addClass("current");
    })
        .owlCarousel({
            loop: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 4,
                    margin: 4,
                    slideBy: 2,
                },
                1170: {
                    items: 4,
                    margin: 8,
                    slideBy: 2,
                },
            },
            lazyLoad: true,
            dots: false,
            nav: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>',
            ],
            smartSpeed: 200,
            slideSpeed: 500,
            responsiveRefreshRate: 100
        }).on('changed.owl.carousel', syncPosition2);

    function syncPosition(el) {
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);
        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }
        sync6.find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = sync6.find('.owl-item.active').length - 1;
        var start = sync6.find('.owl-item.active').first().index();
        var end = sync6.find('.owl-item.active').last().index();
        if (current > end) {
            sync6.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
            sync6.data('owl.carousel').to(current - onscreen, 100, true);
        }
    }

    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            sync5.data('owl.carousel').to(number, 100, true);
        }
    }
    sync6.on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number = $(this).index();
        sync5.data('owl.carousel').to(number, 300, true);
    });

    /* ==================================================================== */

    $('.frontp8_2_tab__wrap__owl .owl-carousel').owlCarousel({
        loop: false,
        nav: false,
        lazyLoad: true,
        responsiveClass: true,
        responsive: {
            0: {
                dots: true,
                items: 1,
            },
            1169: {
                dots: true,
                items: 1,
            },
        },
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>',
        ],
        // autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 5000,
    });

    $('.frontp9__row2 .owl-carousel').owlCarousel({
        loop: false,
        nav: false,
        lazyLoad: true,
        responsiveClass: true,
        responsive: {
            0: {
                dots: true,
                items: 2,
                margin: 8,
            },
            1169: {
                dots: false,
                items: 6,
                margin: 32,
            },
        },
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>',
        ],
        // autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 5000,
    });

    

})(jQuery);
1