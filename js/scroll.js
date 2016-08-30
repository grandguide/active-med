jQuery(document).ready(function() {
	       		var browserMinWidth = parseInt($('body').width());
        		if (browserMinWidth < 770) {
			   		$('html, body').animate({
			       		scrollTop: $("#content-id").offset().top
			   		}, 500);
			   	}
});
	
