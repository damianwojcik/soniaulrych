jQuery(document).ready(function($) {

	var $body = $('body'),
	$wind = $(window),
	windW = $wind.width(),
	windH = $wind.height();

	owl_init();
	mobile_menu();

	function owl_init(){
		$('.owl-carousel').owlCarousel({
			items: 1,
		    loop: true,
		    autoplay: true,
		    autoplayTimeout: 4000,
		    autoplayHoverPause: true,
		    nav: true,
		});
    }

	function masonry_init(){
		var gallery = $('.gallery');

		gallery.each(function(){

			$(this).masonry({
				itemSelector: '.category-item',
			});

		});

	}


	function mobile_menu(){

		var btn = $('#menu-toggle, .sidebar-btn'),
			menu = $('.menu-primary'),
			mobile_menu = $('#mobile-menu');

		btn.on('click', function(){
			$body.toggleClass('menu-open');
			sidebar_menu.toggleClass('visible');
		});

		mobile_menu.find('li.menu-item-has-children').each(function(){
			$(this).prepend('<span class="nav-more">+</span>');
		});

		// var nav_more = $('.nav-more');
		// nav_more.on('click', function(){
		// 	$(this).siblings('ul.sub-menu').toggleClass('visible').slideToggle();


		$(".nav-more").click(function() {
				$(".sub-menu").stop().slideToggle(500);
		});

	}


});
//
// $(".menu-toggle").click(function() {
// 		$(".mobile-nav").stop().slideToggle(500);
// });
