// JavaScript Document
jQuery(document).ready(function($) {
	
	//MENU HAMBURGER STYLE
	$(".navToggle12").click (function(){
		$(this).toggleClass("open");
		$('#main-menu-wrapper').toggleClass("active");
	});

	$(".contact-link").click (function(){
		$('.navToggle12').toggleClass("open");
		$('#main-menu-wrapper').toggleClass("active");
		$('#contact-wrapper').toggleClass("active");
	});
	
	var $frame  = $('#crazy');
	//var $slidee = $frame.children('ul').eq(0);
	//var $wrap   = $frame.parent();

	// Call Sly on frame
	$frame.sly({
		horizontal: 1,
		itemNav: 'basic',
		smart: 1,
		activateOn: 'click',
		mouseDragging: 1,
		touchDragging: 1,
		releaseSwing: 1,
		startAt: 0,
		//scrollBar: $wrap.find('.scrollbar'),
		scrollBy: 1,
		//pagesBar: $wrap.find('.pages'),
		activatePageOn: 'click',
		speed: 700,
		elasticBounds: 1,
		easing: 'easeOutExpo',
		dragHandle: 1,
		dynamicHandle: 1,
		clickBar: 1,
	});

});
