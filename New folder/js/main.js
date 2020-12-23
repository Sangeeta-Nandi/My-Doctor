(function ($) {
	"use strict";
	// Accordian Action
	var action = 'click';
	var speed = "500";

    jQuery(document).ready(function($){


        $(".embed-responsive iframe").addClass("embed-responsive-item");
        $(".carousel-inner .item:first-child").addClass("active");
        
        $('[data-toggle="tooltip"]').tooltip();
		
		$('#menu').slicknav();
		
		$('.featured-single-item').matchHeight(false);
		$('.result-single-item').matchHeight(false);
		$('.diagnostic-result-single-item').matchHeight(false);
		$('.hospital-result-single-item').matchHeight(false);
		$('.govt-hospital-result-single-item').matchHeight(false);
		$('.blood-bank-result-single-item').matchHeight(false);
		$('.ambulance-result-single-item').matchHeight(false);
		$('.doctor-profile-details-right').matchHeight(false);

		// Question handler
		$('li.q').on(action, function(){

		// gets next element
		// opens .a of selected question
		$(this).next().slideToggle(speed)
		
		// selects all other answers and slides up any open answer
		.siblings('li.a').slideUp();
	  
		// Grab img from clicked question
		var img = $(this).children('img');

		// remove Rotate class from all images except the active
		$('img').not(img).removeClass('rotate');

		// toggle rotate class
		img.toggleClass('rotate');

	  });

        


    });


    jQuery(window).load(function(){

        
    });
	
	$(window).scroll(function(){
	  var sticky = $('.sticky'),
		  scroll = $(window).scrollTop();

	  if (scroll >= 120) sticky.addClass('fixed');
	  else sticky.removeClass('fixed');
	});


}(jQuery));	