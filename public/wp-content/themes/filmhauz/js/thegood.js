$(document).ready(function() {
	
	$(".col6.content").waypoint(function(direction) {
		if ( direction === 'down')  {
			$(".header-reader").fadeIn("300");
		}
		else {
			$(".header-reader").fadeOut("300");
		}
	}, {offset: '10%'});


	// Adapted from Brandon Durham's js at https://amemoirproject.com
	function setBookendSize () {
		// Set header height
		var $windowHeight = $(window).height(),
			$wrapper = $(".container.is-top"),
			$footer = $(".post-footer");
		$wrapper.css({
			"padding-bottom": $windowHeight
		});
		$footer.css({
			"height": $windowHeight
		});
	}

	return {
		setup: function () {

			// Set the size of the title page
			setBookendSize();
			$(window).on("debouncedresize", function () { setBookendSize(); });

			// Init scrollWatch
			//scrollWatch();
		}
	};

});

