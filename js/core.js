(function($){$(function(){

var isMobile = function(){
	return ($('#is-mobile').css('display')=='none');
}
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
var setPageHeights = function() {
	// Resize all pages
	$('.page').css({
		height: $(this).height()+'px',
		minHeight: $(this).height()+'px',
	});
}
if(isMobile())
	setPageHeights();

})})(jQuery);