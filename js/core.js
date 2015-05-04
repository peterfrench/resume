(function($){$(function(){

// Activate Tooltips
$('[data-toggle="tooltip"]').tooltip();

// Animate start button
$('#start').bind('click', function(){
	var anchor = $(this).attr('href');
	$('html, body').animate({
		scrollTop: $(anchor).offset().top
	}, 500);
	return false;
});

// On load, set page height to fix issue with google chrome on android.
// When the browser's address bar comes back into view, it changes the value of the window height.
var docHeight = $(document).height();
var setPageHeights = function() {
	var scroll = $(window).scrollTop();
	var position = 1 - ((docHeight - scroll) / docHeight);
	// Resize all pages
	$('.page').css({ height: $(this).height()+'px'});
	// Adjust scroll position
	$(window).scrollTop($(document).height() * position);
	// Save current doc height
	docHeight = $(document).height();
}
setPageHeights();

// Don't fire the resize event too many times
var resizeTimer;
$(window).bind('resize',function(){
	clearTimeout(resizeTimer);
	resizeTimer = setTimeout(setPageHeights, 100);
});

})})(jQuery);