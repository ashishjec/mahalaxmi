/* -------------------------------------------------------------------
 * Template Name         : BizzCorpy - Business Corporate Template
 * Theme Author Name     : Yucel Yilmaz
 * Created Date          : 29 May 2020
 * Version               : 1.0
------------------------------------------------------------------- */
/* -------------------------------------------------------------------
   All Functions                               
   ------------------------ /
 * 01.Preloader
 * 02.Header
 * 03.Counter Up
 * 04.Owl Carousel
 * 05.ScrollIt
 * 06.Background Image Path
------------------------------------------------------------------- */

$( document ).ready( function() {
    // All Functions
    bizzCorpyPreLoader();
    bizzCorpyHeader();
    bizzCorpyCounterUp();
    bizzCorpyCarousel();
    bizzCorpyScrollIt();
    bizzCorpyBgImgPath();
});

/* -------------------------------------------------------------------
 * 06.Background Image Path
------------------------------------------------------------------- */
function bizzCorpyPreLoader(){
    "use-scrict";

    // Variables
    let preloaderWrap = $( '#preloader-wrap' );
    let loaderInner = preloaderWrap.find( '.preloader-inner' );
 
    $( window ).ready(function(){
        loaderInner.fadeOut(); 
        preloaderWrap.delay(350).fadeOut( 'slow' );
    });   
}

/* -------------------------------------------------------------------
 * 02.Header
------------------------------------------------------------------- */
function bizzCorpyHeader() {
    "use-strict";

    // Variables
    let header          = $( '.header' );
    let logoTransparent = $( '.logo-transparent' );
    let scrollTopBtn    = $( '.scroll-top-btn' );
    let logoNormal      = $( '.logo-normal' );
    let windowWidth     = $( window ).innerWidth();
    let scrollTop       = $( window ).scrollTop();
    let $dropdown       = $( '.dropdown' );
    let $dropdownToggle = $( '.dropdown-toggle' );
    let $dropdownMenu   = $('.dropdown-menu');
    let showClass       = 'show';

    // When Window On Scroll
    $( window ).on( 'scroll', function(){
        let scrollTop = $( this ).scrollTop();

        if( scrollTop > 85 ) {
            logoTransparent.hide();
            logoNormal.show();
            header.addClass( 'header-shrink' );
            scrollTopBtn.addClass( 'active' );
        }else {
            logoTransparent.show();
            logoNormal.hide();
            header.addClass( 'header-shrink' );
            scrollTopBtn.addClass( 'active' );
        }
    });

    // The same process is done without page scroll to prevent errors.
    if( scrollTop > 85 ) {
        logoTransparent.hide();
        logoNormal.show();
        header.addClass( 'header-shrink' );
        scrollTopBtn.addClass( 'active' );
    }else {
        logoTransparent.show();
        logoNormal.hide();
        header.addClass( 'header-shrink' );
        scrollTopBtn.addClass( 'active' );
    }

    // Window On Resize Hover Dropdown
    $( window ).on( 'resize', function() {
        let windowWidth  = $( this ).innerWidth();

        if ( windowWidth > 991 ) {
            $dropdown.hover(
                function() {
                    let hasShowClass  =  $( this ).hasClass( showClass );
                    if( hasShowClass!==true ){
                        $( this ).addClass( showClass );
                        $( this ).find( $dropdownToggle ).attr( 'aria-expanded', 'true' );
                        $( this ).find( $dropdownMenu ).addClass( showClass );
                    }
                },
                function() {
                    $( this ).removeClass( showClass);
                    $( this ).find( $dropdownToggle ).attr( 'aria-expanded', 'false' );
                    $( this ).find( $dropdownMenu ).removeClass( showClass );
                }
            );
        }else {
            $dropdown.off( 'mouseenter mouseleave' );
            header.find( '.main-menu' ).collapse( 'hide' );
        }
    });
    // The same process is done without page scroll to prevent errors.
    if ( windowWidth > 991 ) {
        $dropdown.hover(
            function() {
                const $this = $( this );

                var hasShowClass  = $this.hasClass( showClass );

                if( hasShowClass!==true ){
                    $this.addClass( showClass);
                    $this.find ( $dropdownToggle ).attr( 'aria-expanded', 'true' );
                    $this.find( $dropdownMenu ).addClass( showClass );
                }
            },
            function() {
                const $this = $( this );
                $this.removeClass( showClass );
                $this.find( $dropdownToggle ).attr( 'aria-expanded', 'false' );
                $this.find( $dropdownMenu ).removeClass( showClass );
            }
        );
    }else {
        $dropdown.off( 'mouseenter mouseleave' );
    }
}

/* -------------------------------------------------------------------
 * 03.Counter Up
------------------------------------------------------------------- */
function bizzCorpyCounterUp() {
    "use-strict";

    // Variables
    let counterItem     = $( '.counter' );

    counterItem.counterUp({
        delay: 10,
        time: 1000
    });
}

/* -------------------------------------------------------------------
 * 04.Owl Carousel
------------------------------------------------------------------- */
function bizzCorpyCarousel(){

    "use-strict";

    // Variables
    let projectsCarousel        = $( '.latest-projects-carousel' );
    let teamCarousel            = $( '.team-carousel' );
    let testimonialCarousel     = $( '.testimonial-carousel' );
    let pricingCarousel         = $( '.pricing-carousel' );
    let blogCarousel            = $( '.blog-carousel' );
    let projectsDetailCarousel  = $( '.projects-detail-slider' );
    let projectsRecentCarousel  = $( '.projects-recent-carousel' );

    // Projects Carousel
    projectsCarousel.owlCarousel({
        loop:false,
        margin:20,
        nav: true,
        dots:true,
        autoplay:true,
        smartSpeed:1000,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            },
            1200:{
                items:4
            },
            1600:{
                items:5
            }
        }
    });

    // Team Carousel
    teamCarousel.owlCarousel({
        loop:true,
        margin:20,
        nav: false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    // Testimonial Carousel
    testimonialCarousel.owlCarousel({
        loop:true,
        margin:20,
        nav: false,
        dots:true,
        autoplay:true,
        smartSpeed:1000,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            800:{
                items:2
            },
            1000:{
                items:2
            }
        }
    });

    // Pricing Carousel
    pricingCarousel.owlCarousel({
        loop:true,
        margin:20,
        nav: false,
        dots:true,
        autoplay:true,
        smartSpeed:1000,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            700:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    // Blog Carousel
    blogCarousel.owlCarousel({
        loop:false,
        margin:20,
        nav: true,
        dots:true,
        autoplay:true,
        smartSpeed:1000,
        autoplayTimeout:3000,
        autoplayDelay : 2000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            700:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    // Project Details Carousel
    projectsDetailCarousel.owlCarousel({
        loop:true,
        margin:20,
        nav: true,
        dots:false,
        items:1,
        navText: ['<span class="fa fa-arrow-left"></span>', '<span class="fa fa-arrow-right"></span>'],
        autoplay:true,
        smartSpeed:1000,
        autoplayTimeout:3000,
        autoplayHoverPause:true
    });

    // Project Recent Carousel
    projectsRecentCarousel.owlCarousel({
        loop:true,
        margin:20,
        nav: false,
        dots:false,
        items:1,
        autoplay:true,
        smartSpeed:1000,
        autoplayTimeout:3000,
        autoplayHoverPause:true
    });
}

/* -------------------------------------------------------------------
 * 05.ScrollIt
------------------------------------------------------------------- */
function bizzCorpyScrollIt() {
    "use-strict";

    $.scrollIt({
        upKey: 38,             // key code to navigate to the next section
        downKey: 40,           // key code to navigate to the previous section
        easing: 'linear',      // the easing function for animation
        scrollTime: 600,       // how long (in ms) the animation takes
        activeClass: 'active', // class given to the active nav element
        onPageChange: null,    // function(pageIndex) that is called when page is changed
        topOffset: 0           // offste (in px) for fixed top navigation
    });
}


/* -------------------------------------------------------------------
 * 06.Background Image Path
------------------------------------------------------------------- */
function bizzCorpyBgImgPath(){
    "use-scrict";

    // Variables
    let dataBgItem         = $( '*[data-bg-image-path]' );

    dataBgItem.each( function() {
        let imgPath        = $( this ).attr( 'data-bg-image-path' );
        $( this).css( 'background-image', 'url(' + imgPath + ')' );
    });
}