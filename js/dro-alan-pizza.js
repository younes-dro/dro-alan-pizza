(function ($) {

    /**
     * WP Mobile Menu
     * 
     * We clone the main menu and pass it to the plugin
     */
    var droCatererMainMenu = $('.main-navigation ul.menu').clone();
    $(droCatererMainMenu).droSlidingMenu();
    
    /* Stick navigation formobile   */
//    $('.toggle-menu-container-class').addClass('sticky-header');
        
        var stickyNavTopMobile = $('.toggle-menu-container-class').css({"position":"fixed"}).offset().top;
        console.log(stickyNavTopMobile);
        
        $(window).scroll(function () {
            var scrollTop = $(window).scrollTop();

            if (scrollTop > stickyNavTopMobile) {
                $('.toggle-menu-container-class').addClass('sticky-header');
            } else {
                $('.toggle-menu-container-class').removeClass('sticky-header');
            }

        });     
    
    
    
    /* Stick navigation large screen  */
    if ($('.main-navigation').hasClass('sticky-active')) {

        var stickyNavTop = $('.main-navigation').offset().top;
        $(window).scroll(function () {
            var scrollTop = $(window).scrollTop();

            if (scrollTop > stickyNavTop) {
                $('.main-navigation').addClass('sticky-header');
            } else {
                $('.main-navigation').removeClass('sticky-header');
            }

        });       
    }


})(jQuery);


