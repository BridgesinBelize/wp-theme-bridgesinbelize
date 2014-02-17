jQuery( window ).load( function() {
    if ( woo_localized_data.slideshow == 'true' ) { woo_localized_data.slideshow = true; } else { woo_localized_data.slideshow = false; }
    if ( woo_localized_data.directionNav == 'true' ) { woo_localized_data.directionNav = true; } else { woo_localized_data.directionNav = false; }
    if ( woo_localized_data.controlNav == 'true' ) { woo_localized_data.controlNav = true; } else { woo_localized_data.controlNav = false; }
	if ( 'true' == woo_localized_data.pauseOnHover ) { woo_localized_data.pauseOnHover = true; } else { woo_localized_data.pauseOnHover = false; }
    if ( 'true' == woo_localized_data.pauseOnAction ) { woo_localized_data.pauseOnAction = true; } else { woo_localized_data.pauseOnAction = false; }
    if ( 'true' == woo_localized_data.touch ) { woo_localized_data.touch = true; } else { woo_localized_data.touch = false; }
    if ( 'true' == woo_localized_data.smoothHeight ) { woo_localized_data.smoothHeight = true; } else { woo_localized_data.smoothHeight = false; }

   	jQuery( '#featured-slider' ).flexslider({
     		animation: woo_localized_data.animation,
     		controlsContainer: woo_localized_data.controlsContainer,
        	smoothHeight: woo_localized_data.smoothHeight,
     		directionNav: woo_localized_data.directionNav,
   			controlNav: woo_localized_data.controlNav,
   			manualControls: woo_localized_data.manualControls,
     		slideshow: woo_localized_data.slideshow,
     		pauseOnHover: woo_localized_data.pauseOnHover,
     		slideshowSpeed: parseInt( woo_localized_data.slideshowSpeed ),
     		animationSpeed: parseInt( woo_localized_data.animationDuration ),
            touch: woo_localized_data.touch,
            pauseOnHover: woo_localized_data.pauseOnHover, 
            pauseOnAction: woo_localized_data.pauseOnAction,
            useCSS: false
   	});
});