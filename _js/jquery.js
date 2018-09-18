if (window.jQuery) {
    $(document).ready(function() {
        var twitterDisplay = false;
        $("#twitterImage").click(function() {
            if (twitterDisplay == false) {
                $("#twitterImage").animate({
                    'top' : "+=410px"
                }, 500);
                twitterDisplay = true;
            } else {
                $("#twitterImage").animate({
                    'top' : "-=410px"
                }, 500);
                twitterDisplay = false;
            }
            $("#twitterContent").slideToggle(500);
        });

        // work with these effects to make a smooth transition in
        // the data will still display normally if JavaScript is disabled
        var twitter = document.getElementById("twitterContent");
        var today = new Date();
        var months = ['january', 'february', 'march', 'april', 'may', 'june', 
            'july', 'august', 'september', 'october', 'november', 'december'];
        var month = today.getMonth();
        var year = today.getFullYear();
        var currentMonth = months[month];
        var date = currentMonth + " " + year;
        $("#footerDate").text(date);
		
		jQuery(window).bind('orientationchange', function(e) {
			switch ( window.orientation ) {
				case 0:
					$('#mobileLandscape').css('display', 'none');
					// The device is in portrait mode now
				break;

				case 180:
					$('#mobileLandscape').css('display', 'none');
					// The device is in portrait mode now
				break;

				case 90:
					// The device is in landscape now
					$('#mobileLandscape').css('display', 'block');
				break;

				case -90:
					// The device is in landscape now
					$('#mobileLandscape').css('display', 'block');
				break;
			}
		}); // end orientationchange	
    }); // end document.ready
};