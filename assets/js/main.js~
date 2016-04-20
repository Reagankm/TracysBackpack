$(function() {

    //Cache the window object
    var $window = $(window);

    //Parallax bg effect
    $('section[data-type="background"]').each(function() {
	
	var $bgobj = $(this); //assign the object

	$(window).scroll(function() {
	    //scroll the bg at var speed
	    //the yPos is a negative value because
	    //we're scrolling it up

	    var yPos = -($window.scrollTop() / $bgobj.data('speed'));

	    //Put together our final bg position
	    var coords = '50% '+ yPos + 'px';

	    //Move the bg 
	    $bgobj.css({ backgroundPosition: coords });

	}); //end window scroll
    });
});
