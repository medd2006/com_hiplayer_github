jQuery(document).ready(function() {
	jQuery('#audio_favorite').click(function() {
		if (jQuery(this).attr('rel') == 'no') {
			jQuery('#audio_favorite').removeClass('favorite_inactive')
			.addClass('favorite_active').attr('rel', 'yes');
		} else {
			jQuery('#audio_favorite').removeClass('favorite_active')
			.addClass('favorite_inactive').attr('rel', 'no');
		};
	});
});
