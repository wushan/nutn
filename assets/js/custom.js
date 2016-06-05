/**
 * Custom JS.
 *
 * Custom JS scripts.
 *
 * @since 1.0.0
 */
// console.log('CustomJS');
// $('.masonry-inner').masonry({
//   // options
//   itemSelector: 'masonry-item',
//   columnWidth: 200
// });
$(document).ready(function(){

	//HeadRoom
	var myElement = document.getElementById('header');
	// construct an instance of Headroom, passing the element
	var headroom  = new Headroom(myElement);
	// initialise
	headroom.init();


	//Masonry

	var elem = document.querySelector('.masonry-list');
	console.log(elem);
	if (elem) {
		var msnry = new Masonry( elem, {
		  // options
		  itemSelector: '.masonry-item',
		  columnWidth: '.masonry-sizer',
		  gutter: '.gutter-sizer',
		  percentPosition: true
		});
		imagesLoaded( elem ).on( 'progress', function() {
		  // layout Masonry after each image loads
		  msnry.layout();
		});
	} else {
		return
	}
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