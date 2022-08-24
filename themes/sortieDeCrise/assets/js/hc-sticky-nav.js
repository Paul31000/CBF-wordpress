
  /*STICKY NAV*/
jQuery( document ).ready( function( $ ){
    // grab the initial top offset of the navigation
    var stickyNavTop = jQuery('.sticky-nav').offset().top;
 

    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var stickyNav = function(){
        var scrollTop = jQuery(window).scrollTop(); // our current vertical position from the top
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative
        
        if (scrollTop > stickyNavTop) {
            jQuery('.sticky-nav').addClass('sticky');
            jQuery('.h-sticky').show();
        } else {
            jQuery('.sticky-nav').removeClass('sticky');
            jQuery('.h-sticky').hide();
        }
    };


stickyNav();

jQuery(window).scroll(function(){
    stickyNav();
});

  });
   