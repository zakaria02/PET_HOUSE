jQuery(function ($) {

    if($('body').hasClass('rtl')){
        var rtlClass = true;
    } else {
       var rtlClass = false;
    }

    //Navigation toggle
    $("#toggle").click(function () {
        $(this).toggleClass("on");
        $("#menu").slideToggle();
    });
         

    $('.search-icon a').click(function () {
        $('.search-box').addClass('active');
    });

    $('.search-box .close').click(function () {
        $('.search-box').removeClass('active');
    });

    // Woocommerce single page thumbinal image slide
    $('.single-img .img-wrap .images > .thumbnails').slick({
        infinite: true,
        centerMode: false,
        useCss: false,
        easing: 'linear',
        edgeFriction: '0.15',
        lazyLoad: 'ondemand',
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 1,
        cssEase: 'ease',
        rtl: rtlClass,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

        ]
    });

// end

    $('.new-prod-slide').slick({
        infinite: true,
        centerMode: false,
        useCss: false,
        easing: 'linear',
        edgeFriction: '0.15',
        lazyLoad: 'ondemand',
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 1,
        cssEase: 'ease',
        rtl: rtlClass,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.feature-cat-product').slick({
        infinite: true,
        centerMode: false,
        useCss: false,
        easing: 'linear',
        edgeFriction: '0.15',
        lazyLoad: 'ondemand',
        speed: 500,
        slidesToShow: 2,
        slidesToScroll: 1,
        cssEase: 'ease',
        rtl: rtlClass,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    new WOW().init();

    $('#ak-top').css('right', -65);
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('#ak-top').css('right', 20);
        } else {
            $('#ak-top').css('right', -65);
        }
    });

    $("#ak-top").click(function () {
        $('html,body').animate({scrollTop: 0}, 600);
    });

    $('.ticker-wrapper').show();

$('.navigation').addClass("clearfix");


$('#ticker').ticker({
    speed: 0.10,           // The speed of the reveal
    ajaxFeed: false,       // Populate jQuery News Ticker via a feed
    feedUrl: false,        // The URL of the feed
    // MUST BE ON THE SAME DOMAIN AS THE TICKER
    //feedType: 'xml',       // Currently only XML
    htmlFeed: true,        // Populate jQuery News Ticker via HTML
    debugMode: true,       // Show some helpful errors in the console or as alerts
    // SHOULD BE SET TO FALSE FOR PRODUCTION SITES!
    controls: true,        // Whether or not to show the jQuery News Ticker controls
    titleText: accesspress_store_script.ticker_title,   // To remove the title set this to an empty String
    displayType: 'reveal', // Animation type - current options are 'reveal' or 'fade'
    direction: 'ltr',       // Ticker direction - current options are 'ltr' or 'rtl'
    fadeInSpeed: 900,      // Speed of fade in animation
    fadeOutSpeed: 300,   
    pauseOnItems: 3000,    // The pause on a news item before being replaced  
});



});//doc close
