'use strict';

jQuery(document).ready(function($) {
	 $(document).on("scroll", onScroll);
		$('a[href*=#]').bind('click', function(e) {
		 if ($(".home").length >0){ 
			e.preventDefault(); // prevent hard jump, the default behavior

			var target = '#'+$(this).attr("href").split('#')[1]; // Set the target as variable
			var notNumber = isNaN(parseInt($(this).attr("href").split('#')[1]));
			//console.log(target);
			console.log(target);
			console.log($('#masthead').height());
			if(target != '' && target != undefined && target != null && isNaN($(this).attr("href").split('#')[1])){
				var headerHeight	=	jQuery('.header-area').height();
				var theight = parseInt($(target).position().top-52);//+60;//headerHeight;//- $('#masthead').height()-65;
				// perform animated scrolling by getting top-position of target-element and set it as scroll target
				console.log($(target).offset().top);
				console.log(theight);
				var id = $('#site-navigation li a').index(this);
				$('#site-navigation').removeClass("toggled-on")//to close nav li list
				$('html, body').stop().animate({
						scrollTop: theight
				}, 600, function() {
					console.log(id)
					$('.active').removeClass('active');
					$('#site-navigation li:eq('+id+')').addClass('active');
					
					history.pushState({},'',target)
						//location.hash = target; //attach the hash (#jumptarget) to the pageurl
				});
			}else if(!notNumber){
				console.log("redirection");
				window.location.href = $(this).attr("href");
				return true;
			}
			return false;
		} 
	});
	
	/* remove default class*/
	if($('.current-menu-item').length!=0){
		$('.current-menu-item').each(function(){
			$(this).removeClass('current-menu-item');
		});
	}
	if($('.current_page_item').length!=0){
		$('.current_page_item').each(function(){
			$(this).removeClass('current_page_item');
		});
	}
	var origin = document.location.origin;
	var current = location.pathname.split('/')[1];
	if(current!=''){
		if($('.nav-'+current).length!=0){
			$('.nav-'+current).addClass('active');
		}
	}else{
		$('#site-navigation li:eq(0)').addClass('active');
	}
	if($('#site-navigation li .active').length==0){
			console.log('==============>');
		}
	/* remove default class*/
	//to scroll specific blog -- start
	if($('body .scroll-to-post .scroll-post').length){
		var scrollPost = window.location.hash.split('#')[1];
		$(window).load(function(){
			console.log(scrollPost);
			if($('.post-id-'+scrollPost).length)
			{
				var header = $('.navigation-top').innerHeight();
				console.log(header);
				var top = parseInt($('.post-id-'+scrollPost).offset().top- header-100);
				console.log(top);
				$('html,body').animate({scrollTop:top},1000);
			}
		});
	}
	//to scroll specific blog -- end
var origin = document.location.origin;
var actionUrl ='';
		actionUrl = origin;
	// scroll top 
	$(window).load(function(){
		if(window.location.pathname.indexOf("nos-metiers") > -1 && window.location.hash.indexOf('teseo_details_')>-1){
			
			$(window).scrollTop($(window.location.hash).offset().top-100);
		}
	});	
	
	
    // owl carousel
	//if($('#owl-demo').length == 1 ){
		
		$('#owl-demo').owlCarousel({
			loop:true,
			margin:10,
			autoplay: 3000,
			autoplayTimeout:5000,
			//slideSpeed : 30,
			//paginationSpeed : 400,	
			//autoplayTimeout: 1515,
			smartSpeed: 1500,
			responsiveClass:true,			
			responsive:{
				0:{
					items:1,
					nav:true
				},
				600:{
					items:1,
					nav:true
				},
				1000:{
					items:1,
					nav:true,
					loop:true
				}
			}
		});

		$('#confiance-carousel').owlCarousel({
			loop:true,
			margin:10,
			autoplay: true,
			autoplayTimeout:5000,
			smartSpeed: 1500,		
			responsiveClass:true,			
			responsive:{
				0:{
					items:1,
					nav:true
				},
				479:{
					items:2,
					nav:true
				},
				1000:{
					items:5,
					nav:true,
					loop:true
				}
			}
		});
		$('#confiance-testimonial').owlCarousel({
			loop:true,
			margin:10,
			autoplay: true,
			autoplayTimeout:5000,	
			smartSpeed: 1500,
			responsiveClass:true,			
			responsive:{
				0:{
					items:1,
					nav:true
				},
				479:{
					items:1,
					nav:true
				},
				1000:{
					items:1,
					nav:true,
					loop:true
				}
			}
		});
			//sticky header
	$(function() {
		var header = $(".navigation-top");
	  
		$(window).scroll(function() {    
			var scroll = $(window).scrollTop();
			if (scroll >= 60) {
				header.addClass("scrolled");
			} else {
				header.removeClass("scrolled");
				
			}
		});
	  
	});
	
	$('.client-tab-menu').bind('click', function(e) {
		var current_client_group = $(this).attr('id');
		$('.clei_tabs').hide();
		$('.client-tab-menu').removeClass('current-active');
		$(this).addClass('current-active');
		$('.client-'+current_client_group).show();
		
	});
	$('#tab-1').trigger('click');
	/* active class */
    if ($('.owl-item').hasClass('active')) {

        setTimeout(function() {
            $(".active .text_content").fadeIn();
        }, 1200);

    }

	
	
    function itemHeight() {
        if ($(window).innerHeight() < 480) {
            var item_height = $(window).outerHeight() - 60;
        } else {
            var item_height = $(window).outerHeight();
        }
        $('.banner_image .owl-item .item').css({
            'height': item_height,
            'background-repeat': 'no-repeat',
            'background-size': 'cover',
            'background-position': 'center top'
        });
		$('.partners .owl-item .item').css({
            'height': '70px',
            'background-repeat': 'no-repeat',
            'background-size': 'contain',
            'background-position': 'center'
        });
    }
	itemHeight();
	// header class
	function headerFixed() {
		$(window).bind('scroll', function() {
			if ($(window).scrollTop() > 10)
				$('header').addClass('fixed-header');
			else
				$('header').removeClass('fixed-header');
		});
	}
	
	headerFixed();
	
	

	
	
	// Down arrow section
			
	$(".down-arw span").click(function(){
		if($(window).width() < 992){
			var headerHeight  = $('.header').height()+75;		
		}else{
			var headerHeight  = $('.header').height()+125;
		}
			$('html, body').animate({scrollTop: $('.about-section').offset().top-headerHeight}, 1000);		
	});	
// Sticky Footer 

	var footer_height = 0;
				
	$( window ).on("load resize", function() {
		footer_height = $('.site-footer').innerHeight();
		$('.site').css('padding-bottom', footer_height);
		itemHeight();
		// Add Number only validation to input type text
		$('input#telephone').attr('onkeypress','return isTelephone(event)');
	});
	if($('#map-section').length == 1 && themeURL.latitude !=''){

			if($(window).width() > 992){
				$('#map-section').height('400px');		
			}else{
				$('#map-section').height('250px');
			}
			var uluru = {lat: parseFloat(themeURL.latitude), lng: parseFloat(themeURL.longitude)};

			var map = new google.maps.Map(document.getElementById('map-section'), {
				zoom: 22,
				center: uluru,
				mapTypeControl: false,
				draggable: true,
				scaleControl: false,
				scrollwheel: false,
				navigationControl: false,
				streetViewControl: false,
				zoomControl: false,
				fullscreenControl: false
			});
			var marker = new google.maps.Marker({
			  position: uluru,
			  map: map
			});
	}
	
	
	//Popup show
	$('.show-cv').on('click',function(){
		$('.cv-form.popup-outer').show();
		$('body').addClass('popup-open');
	});
	
	//Popup close
	$('.popup-close,.cv-form.popup-outer').click(function(event){
	
		if(event.target.className.indexOf('popup-outer') > -1 || event.target.className == 'popup-close' ){
			$('.cv-form.popup-outer').fadeOut();
			$('body').removeClass('popup-open');
		}
	});
	
	// Select first value empty
	$('.wpcf7-form select').each(function(key, value){
		$(value).children('option:eq(0)').val('');
	});
	
	function onScroll(event){
		var scrollPos = $(document).scrollTop();
		$('#site-navigation li a').each(function () {
			var currLink = $(this);
			var currLi = $(this).parent('li');
			var value=currLink.attr("href").split('#')[1];
			var refElement = $('#'+value);
			console.log(refElement);
			if(refElement.length){
			var headerHeight	=	jQuery('.header-area').height();
			var scrollPos1		=	(parseInt(scrollPos)+parseInt(headerHeight)+51);
			console.log('------------------->'+(refElement.position().top));
			console.log('===================>'+scrollPos1);
				if ((refElement.position().top) <= scrollPos1 ) {
					$('#site-navigation li').each(function(){
						$(this).removeClass("active");
					});
					currLi.addClass("active");
				}else if(scrollPos1<parseInt(jQuery('.slider_area').outerHeight())){
					$('#site-navigation li').each(function(){
						$(this).removeClass("active");
					});
					currLi.removeClass("active");
					$('#site-navigation li:eq(0)').addClass("active");
				}
				else{
					
					currLi.removeClass("active");
				}
			}
		}); 
		
	}
	$(window).on('load', function(){        
   // alert('--------------'+window.location.hash);
			if(window.location.hash!=''){
				var headerHeight	=	jQuery('.header-area').height();
				$('html, body').animate({
					scrollTop: $(window.location.hash).offset().top - headerHeight
				}, 800);
			}
	});
});

//Validate Number 
function isNumber(event){
	return !isNaN( parseFloat(event.key) );
}

//Validate Telephone 
function isTelephone(event){
	var keyCodes =[8,9,37,38,39,40,46];
	if((event.key === '+' && event.target.value==='')|| keyCodes.indexOf(event.keyCode) > -1)
		return true;
	else
		return !isNaN( parseFloat(event.key) );
}