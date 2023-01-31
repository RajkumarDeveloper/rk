jQuery(document).ready(function(){
jQuery(window).on('scroll', function () {
	var scroll = jQuery(window).scrollTop();
	if (scroll < 400) {
    jQuery("#sticky-header").removeClass("sticky");
    jQuery('#back-top').fadeIn(500);
	} else {
    jQuery("#sticky-header").addClass("sticky");
    jQuery('#back-top').fadeIn(500);
	}
});
// mobile_menu
var menu = jQuery('ul#navigation');
if(menu.length){
	menu.slicknav({
		prependTo: ".mobile_menu",
		closedSymbol: '+',
		openedSymbol:'-'
	});
};
// review-active
jQuery('.testmonial_active').owlCarousel({
  loop:true,
  margin:0,
items:1,
autoplay:true,
navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
  nav:true,
dots:false,
autoplayHoverPause: true,
autoplaySpeed: 800,
  responsive:{
      0:{
          items:1,
          dots:false,
          nav:false,
      },
      767:{
          items:1,
          dots:false,
          nav:false,
      },
      992:{
          items:1,
          nav:false
      },
      1200:{
          items:1,
          nav:false
      },
      1500:{
          items:1
      }
  }
});

jQuery("#search_input_box").hide();
jQuery("#search").on("click", function () {
	jQuery("#search_input_box").slideToggle();
	jQuery("#search_input").focus();
});
jQuery("#close_search").on("click", function () {
	jQuery('#search_input_box').slideUp(500);
});
// Search Toggle
jQuery("#search_input_box").hide();
jQuery("#search_1").on("click", function () {
	jQuery("#search_input_box").slideToggle();
	jQuery("#search_input").focus();
});
});