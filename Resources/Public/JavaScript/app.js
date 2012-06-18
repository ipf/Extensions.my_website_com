(function($) {

	$('.lightbox').colorbox();

	$('#userMenu').html('<a class="btn" href="#"><span class="loading">Loading</span></a>');
	$.ajax({
		url: './?eID=tx_mywebsitecom_usermenu',
		cache: false
	}).done(function(html) {
		$('#userMenu').html(html);
	});
})(jQuery);