$(document).ready(function(){
	/*------------------------------- Owl.Carousel -----------------------------*/

	$(".owl-carousel").owlCarousel({
	    loop: true,
	    lazyLoad: true,
	    autoplay: true,
	    autoplayTimeout: 3000,
	    autoplayHoverPause: true,
	    nav: true,
	    navText: ['&larr;', '&rarr;'],
	    responsive: {
	        320: {
	            items: 1
	        }
	    }
	});

	$(".supercat:nth-child(3n+1) .cat_wrapper").addClass('man');
	$(".supercat:nth-child(3n+2) .cat_wrapper").addClass('kids');
	$(".supercat:nth-child(3n+3) .cat_wrapper").addClass('women');
    
});