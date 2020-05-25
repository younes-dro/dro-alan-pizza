(function ($) {

    /**
     * WP Mobile Menu
     * 
     * We clone the main menu and pass it to the plugin
     */
    var droCatererMainMenu = $('.main-navigation ul.menu').clone();
    $(droCatererMainMenu).droSlidingMenu();

    $('.dro-alan-pizza-slick').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    })

    /* Stick navigation and scroll top on window scrolling  */
    var stickyNavTopMobile = $('.toggle-menu-container-class').css({"position": "fixed"}).offset().top;
    var stickyNavTop = $('.main-navigation').offset().top;
    $(window).scroll(function () {
        var scrollToTop = $(window).scrollTop();
        //Mobile
        if (scrollToTop > stickyNavTopMobile) {
            $('.toggle-menu-container-class').addClass('sticky-header');
        } else {
            $('.toggle-menu-container-class').removeClass('sticky-header');
        }
        // Large screen 

        if (scrollToTop > stickyNavTop) {
            $('.main-navigation').addClass('sticky-header');
        } else {
            $('.main-navigation').removeClass('sticky-header');
        }
        // Scroll to the top
        if ($(this).scrollTop() > 200) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }

    });
    // Scroll to the top
    $('.scrollup').click(function () {
        $("html, body").animate({scrollTop: 0}, 200);
        return false;
    });

    /* Modal in archive page */
    $("body").on("click", ".btn-details", function (e) {
        e.preventDefault();
        var id = $(this).data("id");
        var title = $(this).data("title");
        var image = $("#" + id + "-modal-image").html();
        var excerpt = $("#" + id + "-modal-excerpt").html();
        $("#modalSlick")
                .find(".modal-title-pizza").empty().prepend(title).end()
                .find(".modal-image-pizza").empty().prepend(image).end()
                .find(".modal-excerpt-pizza").empty().prepend(excerpt).end()
                .modal("show");
    });

    /* Flash message */
    $(document).ready(function () {


//        $('#flashNotice').fadeIn(function () {
//            $('body').css("overflow", "hidden");
//        });

        $('#flashNotice, .closeFlash').on('click', function () {
            $('#flashNotice').fadeOut(function () {
                $('body').css("overflow", "visible");
            });

        });

    });

})(jQuery);


