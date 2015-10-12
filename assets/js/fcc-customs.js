jQuery(function(){

	var hn = jQuery(".navbar-default");	
	var temp = jQuery(".container #dummy");
	var temp2 = jQuery('.full #dummy');
	var main = jQuery("#main-content");
	var nav_collapse = jQuery(".navbar-collapse");

	jQuery(window).scroll(function(){

		if( jQuery(this).scrollTop()>250){
			temp.addClass("container");
			temp2.addClass("container-fluid");
			hn.addClass("header-nav-scrolled");
			nav_collapse.css("border-top", "25px solid #222");
			jQuery('.navbar-brand').css("padding-top","40px");
		}
		else{
			temp.removeClass("container");
			temp2.removeClass("container-fluid");
			hn.removeClass("header-nav-scrolled");
			nav_collapse.css("border-top", "0px");
			jQuery('.navbar-brand').css("padding-top","15px");
		}

	});


});