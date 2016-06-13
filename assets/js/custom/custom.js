/**
 * Custom JS.
 *
 * Custom JS scripts.
 *
 * @since 1.0.0
 */

jQuery(document).ready(function(){
	jQuery(".sticky").sticky({
		topSpacing: 0,
		getWidthFrom: '#navigation',
		responsiveWidth: true,
		zIndex: 9999
	});
  //Search Form
  jQuery('.js-search-trigger').on('click',function(){
    jQuery('.search-form-wrapper').fadeIn().promise().done(function(){
      jQuery(this).addClass('active');
    });
  });

  jQuery('.search-form-wrapper').on('click', '.js-close', function(){
    jQuery(this).parents('.search-form-wrapper').fadeOut().promise().done(function(){
      jQuery(this).removeClass('active');
    });
  });

  //Gallery
  jQuery('.ngg-galleryoverview .slideshowlink, .ngg-galleryoverview .ngg-navigation').remove();

  //Navigation
  var timer;
  jQuery('.main-navigation #menu-primary-nav > li > a').on('mouseenter', function(){
    //Release All
    jQuery(this).parent().siblings().children('ul').slideUp();
    if ( jQuery(this).siblings().length > 0 ) {
      jQuery(this).siblings().stop(true,true).slideDown();
    }
  });

  jQuery('.main-navigation .sub-menu').on('mouseenter', function(){
    //Stop Timer
    clearTimeout(timer);
  });
  jQuery('.main-navigation .sub-menu').on('mouseleave',function(){
    
    timer = setTimeout(function(){
      jQuery('.main-navigation .sub-menu').stop(true,true).slideUp();
    }, 1500);
  });
});

//typeKit
WebFontConfig = {
    google: { families: [ 'Lato:400,100,300,700,900,900italic:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();