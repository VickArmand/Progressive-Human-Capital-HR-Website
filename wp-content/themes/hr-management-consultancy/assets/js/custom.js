function hr_management_consultancy_menu_open_nav() {
	window.hr_management_consultancy_responsiveMenu=true;
	jQuery(".sidenav").addClass('show');
}
function hr_management_consultancy_menu_close_nav() {
	window.hr_management_consultancy_responsiveMenu=false;
 	jQuery(".sidenav").removeClass('show');
}

jQuery(function($){
 	"use strict";
 	jQuery('.main-menu > ul').superfish({
		delay: 500,
		animation: {opacity:'show',height:'show'},  
		speed: 'fast'
 	});
});

jQuery(document).ready(function () {
	window.hr_management_consultancy_currentfocus=null;
  	hr_management_consultancy_checkfocusdElement();
	var hr_management_consultancy_body = document.querySelector('body');
	hr_management_consultancy_body.addEventListener('keyup', hr_management_consultancy_check_tab_press);
	var hr_management_consultancy_gotoHome = false;
	var hr_management_consultancy_gotoClose = false;
	window.hr_management_consultancy_responsiveMenu=false;
 	function hr_management_consultancy_checkfocusdElement(){
	 	if(window.hr_management_consultancy_currentfocus=document.activeElement.className){
		 	window.hr_management_consultancy_currentfocus=document.activeElement.className;
	 	}
 	}
 	function hr_management_consultancy_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.hr_management_consultancy_responsiveMenu){
			if (!e.shiftKey) {
				if(hr_management_consultancy_gotoHome) {
					jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				hr_management_consultancy_gotoHome = true;
			} else {
				hr_management_consultancy_gotoHome = false;
			}

		}else{

			if(window.hr_management_consultancy_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}}}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.hr_management_consultancy_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.hr_management_consultancy_responsiveMenu){
				if(hr_management_consultancy_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
					hr_management_consultancy_gotoClose = true;
				} else {
					hr_management_consultancy_gotoClose = false;
				}
			
			}else{

			if(window.hr_management_consultancy_responsiveMenu){
			}}}}
		}
	 	hr_management_consultancy_checkfocusdElement();
	}
});

jQuery('document').ready(function($){
  setTimeout(function () {
		jQuery("#preloader").fadeOut("slow");
  },1000);
});

jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('.scrollup i').fadeIn();
    } else {
      jQuery('.scrollup i').fadeOut();
    }
	});
	jQuery('.scrollup i').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
	});
});

