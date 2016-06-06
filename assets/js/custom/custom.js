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