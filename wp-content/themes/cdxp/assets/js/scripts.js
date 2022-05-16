jQuery(document).ready(function ($) {

    // slider 

    jQuery('.logo-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 3,
        autoplay: true,
        lazyLoad: "ondemand",
        autoplaySpeed: 3000,
        arrows: false,
        dots: true,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }
        ]
    });

    $(function () {
        $('li.menu-item-has-children').each(function () {
            $(this).children('a').after('<i class="fas fa-angle-down"></i>');
        });

        $('li.menu-item-has-children i').on("click", function () {
            $(this).siblings('.menu-item-has-children ul.sub-menu').toggle("slow");
        });
    });


    //Main navigation scroll spy for shadow
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 150) {
            $('.header_wrap').addClass('nav-fixed');
        } else {
            $('.header_wrap').removeClass('nav-fixed');
        }

    });


    // Implement go to top.
    var $scroll_obj = jQuery('#btn-scrollup');
    jQuery(window).on('scroll', function () {
        if (jQuery(this).scrollTop() > 100) {
            $scroll_obj.fadeIn();
        } else {
            $scroll_obj.fadeOut();
        }
    });

    $scroll_obj.on('click', function () {
        jQuery('html, body').animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    //  Animation
    AOS.init({
        offset: 150, // offset (in px) from the original trigger point
        delay: 100, // values from 0 to 3000, with step 50ms
        duration: 1000, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: true, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom' // defines which position of the element regarding to window should trigger the animation

    });


    jQuery(".mobile-menu-icon span").on("click", function () {
        jQuery(".body-overlay").fadeIn();
    });
    jQuery(".body-overlay ").on("click", function () {
        jQuery(".body-overlay").fadeOut();
    });
    jQuery(".mobile-menu-icon span").on("click", function () {
        jQuery(".mobile-navigation").addClass("active");
    });
    jQuery(".body-overlay ").on("click", function () {
        jQuery(".mobile-navigation").removeClass("active");
    });


        var $select = $('.page-template-contact .form-details .wpcf7-form-control-wrap select');
        $('option:first', $select).attr('disabled', true);
        $('option:first', $select).attr('selected','selected');
        $('option:first', $select).val('');

});