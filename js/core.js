(function($){$(function(){

// Activate Tooltips
$('[data-toggle="tooltip"]').tooltip();

// Animate start button
$('#start').on('click', function(){
	var anchor = $(this).attr('href');
	$('html, body').animate({
		scrollTop: $(anchor).offset().top
	}, 500);
	return false;
});

})})(jQuery);