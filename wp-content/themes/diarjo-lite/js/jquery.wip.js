jQuery.noConflict()(function($){

/* ===============================================
   Menu
   =============================================== */

	if ( $('nav#mainmenu ul:first .current-menu-item').length ) { 
	
		$('nav#mainmenu ul:first').tinyNav({
			active: 'current-menu-item',
		});

	} else {
	
		$('nav#mainmenu ul:first').tinyNav({
			header: 'Select an item',
		});

	}

	$('nav#mainmenu li').hover(
		function () {
			$(this).children('ul').stop(true, true).fadeIn(100);
	 
		}, 
		function () {
			$(this).children('ul').stop(true, true).fadeOut(400);		
		}
	);

	$('nav#mainmenu ul > li').each(function(){
    	if( $('ul', this).length > 0 )
        $(this).children('a').append('<span class="sf-sub-indicator"> <i class="fa fa-plus"></i> </span>');
	}); 

/* ===============================================
   Scroll to Top Plugin
   =============================================== */

	$(window).scroll(function() {
		if( $(window).scrollTop() > 800 ) {
			$('#back-to-top').fadeIn(500);
				} else {
			$('#back-to-top').fadeOut(500);
		}
	});

	$('#back-to-top').click(function(){
		$.scrollTo(0,'slow');
		return false;
	});

/* ===============================================
   Overlay code
   =============================================== */
	
	$('.overlay-image.blog-thumb').hover(function(){
		
		var imgwidth = $(this).children('img').width();
		var imgheight = $(this).children('img').height();
		
		$(this).children('.link').css({'width':imgwidth,'height':imgheight});		
		$(this).css({'width':imgwidth, 'height':imgheight});		
		
		$('.overlay',this).animate({ opacity : 0.4 },{queue:false});
		}, 
		function() {
		$('.overlay',this).animate({ opacity: 0.0 },{queue:false});
	
	});

	$('.gallery img').hover(function(){
		$(this).animate({ opacity: 0.50 },{queue:false});
	}, 
	function() {
		$(this).animate({ opacity: 1.00 },{queue:false});
	});
	
/* ===============================================
   Prettyphoto code
   =============================================== */

	$("a[data-rel^='prettyPhoto']").prettyPhoto({
	
				animationSpeed:'fast',
				slideshow:5000,
				theme:'pp_default',
				show_title:false,
				overlay_gallery: false,
				social_tools: false
	});

});          