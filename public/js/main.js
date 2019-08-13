jQuery(document).ready(function($){
		
	$(".navbar-toggler").click(function () { 
		$('#header').toggleClass('open');
	});	
	
	
   // Slider
	if ($('#home-slider').length > 0) {
	$('#home-slider').owlCarousel({
	    loop:true,
	    responsive:{
	        0:{
	            items:1,
	            nav:false,
	            dots: true,
	            autoplay: true,
	            smartSpeed: 900
	        }
	      
	    }
	});
	}
	
	
	//Replace boxes (responsive)
   	replace_boxes();
		$(window).bind('resize', function() {
			replace_boxes();
		});
		function replace_boxes() {
	  		var w_cont = parseInt($(window).width());
	  		w_page = 768;
	  		
	  		w_page_l = 992;
	  		
	  		if (w_cont < w_page_l) { 
	  			$('#content .map-area .small-area').remove().insertAfter('#content .map-box .small-area h4');
	  				$('#content .lang').remove().insertAfter('#header #navbarSupportedContent');
	  		} else {	
	  			$('#content .map-box .small-area .small-area').remove().prependTo('#content .map-area');
	  				$('#header .lang').remove().prependTo('#content .info');
	  		}

		  	if (w_cont < w_page) {
		   		$('#content .left-box .info .btn').remove().appendTo('#content .right-box .pic');
		   		
			} else {
			   	$('#content .right-box .pic .btn').remove().appendTo('#content .left-box .info');
			   
			};
		
	 };
	
	
	
	$(".photo-box").hover(function () { 
		$(this).addClass('active');
	}, function() {
		$(this).removeClass('active');
	});
	
	
	$(".map-link").hover(function () { 
		var cur = $(this).attr('href');
		$('.hover-img').removeClass('open');
		$('.hover-img.' + cur).addClass('open');
	}, function() {
		$('.hover-img').removeClass('open');
	});
	
	$("#content .map-box .small-area ul li a, .map-link").click(function () { 
		var cur = $(this).attr('href');
		$("#content .map-box .small-area ul li").removeClass('active');
		$(this).parent('li').addClass('active');
		$('.t-box').removeClass('open');
		$('.hover-img').removeClass('open');
		$('.hover-img').removeClass('vis');
		$('.c-text').removeClass('open');
		$('.' + cur).addClass('open');
		$('.hover-img.' + cur).addClass('vis');
		if($('.' + cur).hasClass('open')) {
			$('.map-im').addClass('long');
		}
		return false;
	});
	
	
	
	$("#content .map-im .t-box .m-close").click(function () { 
		$("#content .map-box .small-area ul li").removeClass('active');
		$(".map-im").removeClass('long');
		$(this).parents('.t-box').removeClass('open');
		$('.c-text').removeClass('open');
		$('.hover-img').removeClass('open');
		$('.hover-img').removeClass('vis');
		return false;
	});

	$('.nav > li').click(function() { 
    	$(this).toggleClass('open');
	});

	$('input, select').styler();
	
	
	

	$(".mask").inputmask({"mask": "+99 999 99 999 99", "placeholder": ""});
	
	$(window).scroll(function(){
    	var h = $(window).height();
    	
    	if ($('#content .agent-form').length > 0) {
    	if ( ($(this).scrollTop()+h) >= $("#content .map-box").offset().top) {
			
			      $("#content .agent-form").addClass('nofix');
		} else {
			
			 $("#content .agent-form").removeClass('nofix');
		}
    	}
    	
    	
    	if ($('#content .agent-price').length > 0) {
    	if ( ($(this).scrollTop()+h) >= $("#content .agent-price").offset().top) {
			
			setInterval(function() {
			      $("#content .agent-price").addClass('animated slideInUp');
			}, 200);
		} 
    	}
    	if ($('#content .steps-post .step').eq(0).length > 0) {
    	if ( ($(this).scrollTop()+h) >= $("#content .steps-post .step").eq(0).offset().top) {
			
			setInterval(function() {
			      $("#content .steps-post .step").eq(0).addClass('animated zoomIn');
			}, 200);
		} 	
		}
		if ($('#content .steps-post .step').eq(1).length > 0) {
		if ( ($(this).scrollTop()+h) >= $("#content .steps-post .step").eq(1).offset().top) {
			
			setInterval(function() {
			      $("#content .steps-post .step").eq(1).addClass('animated zoomIn');
			}, 300);
		} 	
		}
		if ($('#content .steps-post .step').eq(2).length > 0) {
		if ( ($(this).scrollTop()+h) >= $("#content .steps-post .step").eq(2).offset().top) {
			
			setInterval(function() {
			      $("#content .steps-post .step").eq(2).addClass('animated zoomIn');
			}, 400);
		} 	
		}
		if ($('#content .steps-post .step').eq(3).length > 0) {
		if ( ($(this).scrollTop()+h) >= $("#content .steps-post .step").eq(3).offset().top) {
			
			setInterval(function() {
			      $("#content .steps-post .step").eq(3).addClass('animated zoomIn');
			}, 500);
		} 	
		
		}
		
    	if ($('.bg.boxes-area').length > 0) {
    	if ( ($(this).scrollTop()+h) >= $(".bg.boxes-area").offset().top) {
			
			setInterval(function() {
			      $("#content .bg.boxes-area .small-area h4").addClass('animated slideInUp');
			}, 200);
			
		} 
    	}
    	if ($('#content .text-list:not(.list-other)').length > 0) {
    	if ( ($(this).scrollTop()+h) >= $("#content .text-list:not(.list-other)").offset().top) {
			
			setInterval(function() {
			      $("#content .text-list:not(.list-other) .im img").addClass('animated slideInLeft');
			}, 200);
			
		} 
		}
		if ($('#content .forma-post').length > 0) {
		if ( ($(this).scrollTop()+h) >= $("#content .forma-post").offset().top) {
			
			setInterval(function() {
			      $("#content .forma-post .small-area p").addClass('animated slideInRight');
			}, 200);
			
		}
		}
    });
    
    
    $(".non-link .btn").click(function () { 
    	$('#content .agent-area').toggleClass('open');
    });
    
    $('#content .arrow-form a').click(function(){ 
		$('#content .agent-area').removeClass('open');
	});
    
	$(".lang").click(function () { 
		$(this).toggleClass('open');
		return false;
	});	
		

});