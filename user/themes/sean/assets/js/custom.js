// Add all initializing JS inside document.ready
$(document).ready(function() {
    var $mainMenuDrop = $(".has-sub");
    var $subMenu = $(".has-sub > ul");
    var $mobileLinkContain = $(".sidebar_content");
    var $mobileButton = $("#mobile_menu_button");
    var $mobileSlideIn = $(".menu-slideIn");
    var $mobileThird = $(".mobile_third");
    var $mobileMenuBack = $(".mobile_third .menu_back");
    var $mobileMenuSubAnimate = $('.sidebar_nav #menu_push');
    var activeContent = $(".tab_content");
    var activeTab = $('.active_tab');
    var didScroll;
    var lastScrollTop = 0;
    var delta = 99;
    var searchBarHeight = $('.search .form').outerHeight();

    mobileMenu(); //initialize mobile menu
    menuClicks(); //initialize all menu click events
    tabMenu(); //initialize tab menu
    $(window).resize(mobileMenu);

    //hide sub menus
    $(".sub-menu").hide();

    //mobile menu show/hide based on media query
    function mobileMenu() {
        //check if mobile menu button is shown
        if ($mobileButton.css("display") === "block") {
            //if mobile menu button is shown then hide menu links
            $subMenu.removeClass("sub-menu");
            $subMenu.addClass("menu-slideIn");
            $(".mobile_third ul").addClass("menu-slideIn");
            $mobileLinkContain.hide();
        } else if ($mobileButton.css("display") === "none") {
            //if mobile menu button is hidden then show menu links
            $mobileLinkContain.show();
            $subMenu.removeClass("menu-slideIn");
            $(".mobile_third ul").removeClass("menu-slideIn");
            $subMenu.addClass("sub-menu");
        }
    }//end mobileMenu function

    //Menu Click Events
    function menuClicks() {
        //when desktop menu link is clicked toggle dropdown
        $mainMenuDrop.on("click", function() {
            $(this).find(".sub-menu").slideToggle(300);
        });

        //when mobile menu button is clicked drop
        $mobileButton.on("click", function() {
            $mobileLinkContain.slideToggle(300);
        });

        //mobile menu sub fly out action
        $mainMenuDrop.on('click', function(){
            //when mobile menu link is clicked clone its sub menu to the .mobile_third div
                $(this).find('.menu-slideIn').contents().clone().appendTo('.mobile_third .menu-slideIn');
                $mobileMenuSubAnimate.addClass('menu_out');
                $mobileThird.css('right', '0');
        });

        //if back link is clicked remove li content and slide right
        $mobileMenuBack.on('click', function(){
            $mobileMenuSubAnimate.removeClass('menu_out');
            $mobileThird.css('right', '-100vw');
            //fade content 50ms longer than slide to ensure graceful transition
            $('.mobile_third ul li').fadeOut(350, function(){
                $(this).remove();
            });
        });
    }//end click functions

    //tabs system//
    function tabMenu() {
        $(".active_content").show();
        $(".tabs_labels li a").on("click", function(e) {
            var currentAttrValue = $(this).attr('href');
            $(currentAttrValue).addClass('active_content').show().siblings().hide().removeClass('acti');
            $(this).parent('li').addClass('active_tab').siblings().removeClass('active_tab');
            e.preventDefault();
        });
    }//end tabMenu function

    //fixed searchbar that is only fixed on scroll up
    $(window).scroll(function(event){
    didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > searchBarHeight){
            // Scroll Down
            $('.search').addClass('search_up');
            $('#search_icon').addClass('search_up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('.search').removeClass('search_up');
                $('#search_icon').removeClass('search_up');
            }
        }

        lastScrollTop = st;
    }
});
