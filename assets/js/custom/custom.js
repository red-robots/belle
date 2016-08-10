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
		  masonry: {
			gutter: 15
			}
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
	
	/*
	 * Maintain porportion for boxes labed size-d1xd2
	 */
	$(window).on('ready resize',function(){
		$('[class*="size"]').each(function(){
			console.log("class");
			var $this = $(this);
			$this.attr("class").split(" ").forEach(function(item){
				var matches = item.match(/(size-)(\d)x(\d)/i);
				console.log("item");
				if(matches.length===4){
					$this.css({
						"height": Number($this.width())*matches[3]/matches[2]+"px"
					});
				}
			});
		});
	});

});// END #####################################    END
