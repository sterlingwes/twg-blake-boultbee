$(function() {

	$('.burger').on('click', function(){
		$('.hamburger-menu').fadeToggle(700).toggleClass('show');
	});

	var stickyNavOffset = $('.home-navigation').offset()
	if (stickyNavOffset) {
		var stickyNavTop = stickyNavOffset.top;

	 	var stickyNav = function(){
	    var scrollTop = $(window).scrollTop();
	    if (scrollTop > stickyNavTop) { 
	        $('.home-navigation').addClass('sticky');
	    } else {
	        $('.home-navigation').removeClass('sticky'); 
	    }
		};

		stickyNav();

		$(window).scroll(function() {
			stickyNav();
		});
	}
 	



 	var stickyNavOffset2 = $('.fullmenu').offset()
	if (stickyNavOffset2) {
		var stickyNavTop2 = stickyNavOffset2.top;

	 	var stickyNav2 = function(){
	    var scrollTop = $(window).scrollTop();
	    if (scrollTop > stickyNavTop2) { 
	        $('.fullmenu').addClass('stickywhite');
	    } else {
	        $('.fullmenu').removeClass('stickywhite'); 
	    }
		};

		stickyNav2();

		$(window).scroll(function() {
			stickyNav2();
		});
	}
 	
 
 


	var stickyDonateOffset = $('.donate-sticky-bar').offset()
	if (stickyDonateOffset) {
		var stickyDonateTop = stickyDonateOffset.top;
	 	
	 	var stickyDonate = function(){
	    var scrollTop2 = $(window).scrollTop();
	         
	    if (scrollTop2 > stickyDonateTop) { 
	        $('.donate-sticky-bar').addClass('stickydonate');
	    } else {
	        $('.donate-sticky-bar').removeClass('stickydonate'); 
	    }
		};

		stickyDonate();

		$(window).scroll(function() {
			stickyDonate();
		});
	}

});