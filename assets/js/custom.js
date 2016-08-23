/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
	
	/*
	*
	*	Current Page Active
	*
	------------------------------------*/
	$("[href]").each(function() {
    if (this.href == window.location.href) {
        $(this).addClass("active");
        }
	});
	
	/*
	*
	*	Flexslider
	*
	------------------------------------*/
	$('.flexslider').flexslider({
		animation: "slide",
	}); // end register flexslider
	
	/*
	*
	*	Colorbox
	*
	------------------------------------*/
	$('a.gallery').colorbox({
		rel:'gal',
		width: '80%', 
		height: '80%'
	});
	
	/*
	*
	*	Isotope with Images Loaded
	*
	------------------------------------*/
	var $container = $('#container').imagesLoaded( function() {
  	$container.isotope({
        // options
        itemSelector: '.item',
        percentPosition: true,
        });
	});

	/*
	*
	*	Smooth Scroll to Anchor
	*
	------------------------------------*/
	/* $('a').click(function(){
	    $('html, body').animate({
	        scrollTop: $('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top
	    }, 500);
	    return false;
	});
    */
	/*
	*
	*	Nice Page Scroll
	*
	------------------------------------*/
	/*
    $(function(){	
		$("html").niceScroll();
	});
	*/
	
	/*
	*
	*	Equal Heights Divs
	*
	------------------------------------*/
	$('.js-blocks').matchHeight();

	/*
	*
	*	Wow Animation
	*
	------------------------------------*/
	new WOW().init();
	
    /*-----------------------------------
	 * Custom mobile navigation
	 ------------------------------------*/
	//if hamburger clicked move menu into view
	$('#main-sidebar > .mobile.bars')
	.on('click',function(){
		$('#mobile-menu').animate({
			"right": 0,
		});
	});
	//if hamburger clicked on menu move back out of view
	$('#mobile-menu > .mobile-bars')
	.on('click',function(){
		var $nav = $('#mobile-menu');
		$nav.animate({
			"right": 100*(-1*$nav.width()/$(window).width())-2+"%"
		});
	});
    /*
     * Custom facebook feed height
     */
    var $facebook = $('.facebook-feed');
    if($facebook.length!==0){
        var $window = $(window);
        $window.on('load', size_facebook);
        $window.on('resize', size_facebook);
        function size_facebook(){
            var $testimonial = $('.testimonial .quote.wrapper');
            var $header = $facebook.find('.facebook-header');
            var $cff = $('#cff');
            var scrollbar_width = window.innerWidth-$window.width();
            if($window.width()<=600-scrollbar_width){
                $cff.height(200);
            } else {
                $cff.height($testimonial.height()-$header.height()-Number($header.css('padding-bottom').replace(/[^\d]/g,""))-Number($header.css('padding-top').replace(/[^\d]/g,""))-Number($cff.css('padding-bottom').replace(/[^\d]/g,""))-Number($cff.css('padding-top').replace(/[^\d]/g,"")));
            }
        }
    }

});// END #####################################    END
