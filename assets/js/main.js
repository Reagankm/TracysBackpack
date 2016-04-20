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

$('meta-tooltip').hover(function (e) {    
  var target = '#' + ($(this).attr('data-popbox'));
  $(target).show();
  moveLeft = $(this).outerWidth();
  moveDown = ($(target).outerHeight() / 2);
}, function () {
  var target = '#' + ($(this).attr('data-popbox'));
  if (!($("a.popper").hasClass("show"))) {
    $(target).hide(); //dont hide popup if it is clicked
  }
});
$('meta-tooltip').click(function (e) {
  var target = '#' + ($(this).attr('data-popbox'));
  if (!($(this).hasClass("show"))) {
    $(target).show();
  }
  $(this).toggleClass("show");
});
