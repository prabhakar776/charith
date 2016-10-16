// JavaScript Document
$(document).ready(function(){


// flex slider

	$('.flexslider').flexslider({
		animation: "slide",
		slideshow: true,
		slideshowSpeed: 6000,
		controlNav: false
	});



// news ticker
	
	$(".ticker3").modernTicker({
		effect: "type",
		typeInterval: 10,
		displayTime: 6000,
		transitionTime: 300,
		autoplay: true
	});
		


// home page caption box images

	$('.boxgrid.cap').hover(function(){
		$(".cover", this).stop().animate({top:'0px'},{queue:false,duration:160});
	}, function() {
		$(".cover", this).stop().animate({top:'120px'},{queue:false,duration:160});
	});

// scroll to top

	$(window).scroll(function(){
		if($(this).scrollTop() > 100){
			$(".scrollup").fadeIn();
		}else{
			$(".scrollup").fadeOut();
		}
	});
	
	$(".scrollup").click(function(){
		$("html, body").animate({ scrollTop: 0 }, 600);
		return false;
	});

// bx slider home

	  $('.bxsl-1').bxSlider({
		slideWidth: 225,
		auto:true,
		pause:8000,
		minSlides: 4,
		maxSlides: 8,
		moveSlides:4,
		slideMargin: 25,
		pager:false,
	  });
	  
	  
// home text flash

		$('#fade').list_ticker({
		speed:8000,
		effect:'fade'
		});
		
		$('#fade2').list_ticker({
		speed:10000,
		effect:'fade'
		});

		$('#fade3').list_ticker({
		speed:6000,
		effect:'fade'
		});


// end of document
});