//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function () {
    $('a.page-scroll').bind('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// onscroll add or remove class
$(window).scroll(function () {
    "use strict";
    var scroll = $(window).scrollTop();

    if (scroll >= 120) {
        $(".header").addClass("header-scrolled");
    } else {
        $(".header").removeClass("header-scrolled");
    }

});

(function ($) {
    'use strict';
    $(document).ready(function () {

        //check device type
        function deviceType() {
            var mobile = false;
            //touch on IOS and Android
            var isAndroid = /(android)/i.test(navigator.userAgent);
            var isMobile = /(mobile)/i.test(navigator.userAgent);
            if (navigator.userAgent.match(/(iPod|iPhone|iPad)/) || isAndroid || isMobile) {
                mobile = true;
            } else {
                mobile = false;
            }
            return mobile;
        }

        function itemInit() {
            var mobile = deviceType();
            //check device type
            if (mobile == true) {
                //if mobile
                $('html').addClass('touch');
            } else {
                //if desktop
                $('html').addClass('notouch');
            }
        }

        //call function
        itemInit();

    });
}(jQuery));

$('.menuhp__specialslider').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    dots: false,
    animateIn: 'fadeIn',
    autoplay: true,
    responsive: {
        0: {
            items: 1
        },
        450: {
            items: 2
        },
        767: {
            items: 3
        },
        991: {
            items: 4
        },
        1200: {
            items: 5
        },
        1400: {
            items: 6
        }
    }
});

$('.reviewhp-slider').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    animateIn: 'fadeIn',
    autoplay: true,
    responsive: {
        0: {
            items: 1
        },
        567: {
            items: 2
        },
        1400: {
            items: 3
        }
    }
});

//wow intialization
new WOW().init();

//addclass formfield
$(".formfield input, .formfield textarea, .formfield select").addClass("form-control");

//carousel
$('#carousel1').carousel({
    interval: 8000
});
$('.carousel-item').append('<div class="carou--bg"></div>');

//add to value on every step
$(".carousel-caption-txt-sm, .carousel-caption-txt-bg, .carousel-caption p, .carousel-caption-link a").addClass("animated");


$(".carousel-caption-txt-sm").addClass("slideInUp anim-delay750");
$(".carousel-caption-txt-bg").addClass("fadeInLeft anim-delay750");
$(".carousel-caption p").addClass("fadeInUp anim-delay1500");
$(".carousel-caption-link a").addClass("linkdab linkdab-alt fadeInUp anim-delay2000");

$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

//date use
$(document).ready(function () {
    var dateToday = new Date();
    $(function () {
        $("#bookdate").datepicker({
            showButtonPanel: true,
            minDate: dateToday,
            beforeShowDay: $.datepicker.noWeekends
        });
    });
});
//linkdab wrapinner
$(".linkdab,.linksonar").wrapInner("<span></span>");

//insert spacer middle of nav list by calculation
$(document).ready(function () {
    "use strict";
    var navLength = $('.navul > li').length;
    var navLengthCalc;
    if (navLength % 2 == 0) {
        navLengthCalc = navLength / 2;
    } else {
        navLengthCalc = Math.ceil(navLength / 2);
    }
    //$("#main-menu > li:nth-child("+ navLengthCalc +")").after("<div class='nav--spacer dis-md'></div>");
    $(".navul > li:nth-child(" + navLengthCalc + ")").addClass("nav--spacerli");
});
//copy nav
$(document).ready(function () {
    "use strict";
    var $navul = $('.navigation__wrap .navul').clone().removeClass('dis-md');
    $('.menufixed__box-nav').prepend($navul);
});

//navigation toggle
$(document).ready(function () {
    $('.navicon-button').click(function () {
        "use strict";
        var $this = $(this);
        $('html').toggleClass('overflowYStop');
        $('.navicon-button').toggleClass('open');
        $('.menufixed__wrap').toggleClass('open');
        $('.has-submenu').removeClass('open');
    });
});
//navigation toggle submenu
$(document).ready(function () {
    $('.has-submenu').click(function () {
        "use strict";
        var $this = $(this);
        $('.has-submenu').not(this).removeClass('open');
        $this.toggleClass('open');
    });
});

$(document).ready(function () {
    $('.reservepopup-form--toggle').click(function () {
        "use strict";
        $('.reservepopup__wrap').toggleClass('open');
        $('html').removeClass('overflowYStop');
        $('.navicon-button').removeClass('open');
        $('.menufixed__wrap').removeClass('open');
        $('.has-submenu').removeClass('open');
    });
});

$(document).ready(function () {
    $('.removeAllPopUp').click(function () {
        "use strict";
        $('html').removeClass('overflowYStop');
        $('.navicon-button').removeClass('open');
        $('.menufixed__wrap').removeClass('open');
        $('.has-submenu').removeClass('open');
    });
});

$(document).ready(function () {
    var url = window.location;
    $('.checklink a[href="' + url + '"]').parent().addClass('active');
    $('.checklink a').filter(function () {
        return this.href == url;
    }).parent().addClass('active');
    $('.has-submenu>ul>li.active').parents('.has-submenu').addClass('active');
});

//copy img to background
$(document).ready(function () {
    "use strict";
    var $classforbg = $('.imgtobgcover>img');
    $classforbg.addClass('imgtobg');
    $('.imgtobg').each(function () {
        "use strict";
        var $this = $(this);
        var thissrc = $(this).attr('src');
        $this.after('<div class="imgtobg-o" style="background-image:url(' + thissrc + ')"></div>');
        $this.hide();
    });
});

$(document).ready(function () {
    $('.galleryhp__imgcover>img').each(function () {
        "use strict";
        var $this = $(this);
        $this.parent('.galleryhp__imgcover').append('<a class="fancybox" rel="group" href="' + $this.attr('src') + '"><i class="fa fa-eye"></i></a>');
    });
});

$(document).ready(function () {
    $('.menu__details-img>img').each(function () {
        "use strict";
        var $this = $(this);
        var title = $this.parent('.menu__details-img').siblings('.menu__details-title').html();
        $this.parent('.menu__details-img').append('<a class="fancybox" href="' + $this.attr('src') + '" title="' + title + '"></a>');
    });
});


$(document).ready(function () {
    $('.preloader__wrap').addClass('pageloaded');
});


//rellax iniat
var rellax = new Rellax('.rellax');

// Intialize Fancybox
$(document).ready(function () {
    "use strict";
    $(".fancybox").fancybox();
});


/*====================================
			// Isotop Active
======================================*/
$(window).on('load', function () {

    if ($.fn.isotope) {
        $(".isotop-active").isotope({
            filter: '*',
        });

        $('.gallery__nav ul li').on('click', function () {
            $(".gallery__nav ul li").removeClass("active");
            $(this).addClass("active");

            var selector = $(this).attr('data-filter');
            $(".isotop-active").isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'easeInOutQuart',
                    queue: false,
                }
            });
            return false;
        });
    }
});

//jssor intialize
jssor_1_slider_init = function () {

    var jssor_1_SlideshowTransitions = [{
            $Duration: 1200,
            $Zoom: 1,
            $Easing: {
                $Zoom: $Jease$.$InCubic,
                $Opacity: $Jease$.$OutQuad
            },
            $Opacity: 2
        },
        {
            $Duration: 1000,
            $Zoom: 11,
            $SlideOut: true,
            $Easing: {
                $Zoom: $Jease$.$InExpo,
                $Opacity: $Jease$.$Linear
            },
            $Opacity: 2
        },
        {
            $Duration: 1200,
            $Zoom: 1,
            $Rotate: 1,
            $During: {
                $Zoom: [0.2, 0.8],
                $Rotate: [0.2, 0.8]
            },
            $Easing: {
                $Zoom: $Jease$.$Swing,
                $Opacity: $Jease$.$Linear,
                $Rotate: $Jease$.$Swing
            },
            $Opacity: 2,
            $Round: {
                $Rotate: 0.5
            }
        },
        {
            $Duration: 1000,
            $Zoom: 11,
            $Rotate: 1,
            $SlideOut: true,
            $Easing: {
                $Zoom: $Jease$.$InQuint,
                $Opacity: $Jease$.$Linear,
                $Rotate: $Jease$.$InQuint
            },
            $Opacity: 2,
            $Round: {
                $Rotate: 0.8
            }
        },
        {
            $Duration: 1200,
            x: 0.5,
            $Cols: 2,
            $Zoom: 1,
            $Assembly: 2049,
            $ChessMode: {
                $Column: 15
            },
            $Easing: {
                $Left: $Jease$.$InCubic,
                $Zoom: $Jease$.$InCubic,
                $Opacity: $Jease$.$Linear
            },
            $Opacity: 2
        },
        {
            $Duration: 1200,
            x: 4,
            $Cols: 2,
            $Zoom: 11,
            $SlideOut: true,
            $Assembly: 2049,
            $ChessMode: {
                $Column: 15
            },
            $Easing: {
                $Left: $Jease$.$InExpo,
                $Zoom: $Jease$.$InExpo,
                $Opacity: $Jease$.$Linear
            },
            $Opacity: 2
        },
        {
            $Duration: 1200,
            x: 0.6,
            $Zoom: 1,
            $Rotate: 1,
            $During: {
                $Left: [0.2, 0.8],
                $Zoom: [0.2, 0.8],
                $Rotate: [0.2, 0.8]
            },
            $Opacity: 2,
            $Round: {
                $Rotate: 0.5
            }
        },
        {
            $Duration: 1000,
            x: -4,
            $Zoom: 11,
            $Rotate: 1,
            $SlideOut: true,
            $Easing: {
                $Left: $Jease$.$InQuint,
                $Zoom: $Jease$.$InQuart,
                $Opacity: $Jease$.$Linear,
                $Rotate: $Jease$.$InQuint
            },
            $Opacity: 2,
            $Round: {
                $Rotate: 0.8
            }
        },
        {
            $Duration: 1200,
            x: -0.6,
            $Zoom: 1,
            $Rotate: 1,
            $During: {
                $Left: [0.2, 0.8],
                $Zoom: [0.2, 0.8],
                $Rotate: [0.2, 0.8]
            },
            $Opacity: 2,
            $Round: {
                $Rotate: 0.5
            }
        },
        {
            $Duration: 1000,
            x: 4,
            $Zoom: 11,
            $Rotate: 1,
            $SlideOut: true,
            $Easing: {
                $Left: $Jease$.$InQuint,
                $Zoom: $Jease$.$InQuart,
                $Opacity: $Jease$.$Linear,
                $Rotate: $Jease$.$InQuint
            },
            $Opacity: 2,
            $Round: {
                $Rotate: 0.8
            }
        },
        {
            $Duration: 1200,
            x: 0.5,
            y: 0.3,
            $Cols: 2,
            $Zoom: 1,
            $Rotate: 1,
            $Assembly: 2049,
            $ChessMode: {
                $Column: 15
            },
            $Easing: {
                $Left: $Jease$.$InCubic,
                $Top: $Jease$.$InCubic,
                $Zoom: $Jease$.$InCubic,
                $Opacity: $Jease$.$OutQuad,
                $Rotate: $Jease$.$InCubic
            },
            $Opacity: 2,
            $Round: {
                $Rotate: 0.7
            }
        },
        {
            $Duration: 1000,
            x: 0.5,
            y: 0.3,
            $Cols: 2,
            $Zoom: 1,
            $Rotate: 1,
            $SlideOut: true,
            $Assembly: 2049,
            $ChessMode: {
                $Column: 15
            },
            $Easing: {
                $Left: $Jease$.$InExpo,
                $Top: $Jease$.$InExpo,
                $Zoom: $Jease$.$InExpo,
                $Opacity: $Jease$.$Linear,
                $Rotate: $Jease$.$InExpo
            },
            $Opacity: 2,
            $Round: {
                $Rotate: 0.7
            }
        },
        {
            $Duration: 1200,
            x: -4,
            y: 2,
            $Rows: 2,
            $Zoom: 11,
            $Rotate: 1,
            $Assembly: 2049,
            $ChessMode: {
                $Row: 28
            },
            $Easing: {
                $Left: $Jease$.$InCubic,
                $Top: $Jease$.$InCubic,
                $Zoom: $Jease$.$InCubic,
                $Opacity: $Jease$.$OutQuad,
                $Rotate: $Jease$.$InCubic
            },
            $Opacity: 2,
            $Round: {
                $Rotate: 0.7
            }
        },
        {
            $Duration: 1200,
            x: 1,
            y: 2,
            $Cols: 2,
            $Zoom: 11,
            $Rotate: 1,
            $Assembly: 2049,
            $ChessMode: {
                $Column: 19
            },
            $Easing: {
                $Left: $Jease$.$InCubic,
                $Top: $Jease$.$InCubic,
                $Zoom: $Jease$.$InCubic,
                $Opacity: $Jease$.$OutQuad,
                $Rotate: $Jease$.$InCubic
            },
            $Opacity: 2,
            $Round: {
                $Rotate: 0.8
            }
        }
    ];

    var jssor_1_options = {
        $AutoPlay: 1,
        $SlideshowOptions: {
            $Class: $JssorSlideshowRunner$,
            $Transitions: jssor_1_SlideshowTransitions,
            $TransitionsOrder: 1
        },
        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
        },
        $ThumbnailNavigatorOptions: {
            $Class: $JssorThumbnailNavigator$,
            $Rows: 2,
            $SpacingX: 14,
            $SpacingY: 12,
            $Orientation: 2,
            $Align: 156
        }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    /*#region responsive code begin*/

    var MAX_WIDTH = 960;

    function ScaleSlider() {
        var containerElement = jssor_1_slider.$Elmt.parentNode;
        var containerWidth = containerElement.clientWidth;

        if (containerWidth) {

            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

            jssor_1_slider.$ScaleWidth(expectedWidth);
        } else {
            window.setTimeout(ScaleSlider, 30);
        }
    }

    ScaleSlider();

    $Jssor$.$AddEvent(window, "load", ScaleSlider);
    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    /*#endregion responsive code end*/
};
//jssor init
jssor_1_slider_init();