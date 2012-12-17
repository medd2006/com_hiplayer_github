jQuery(document).ready(function() {

	function change_state (state) {
		jQuery.post('index.php', {
			option: 'com_hiplayer',
			task: 'favorites.' + state,
			format: 'json',
			tour_id: jQuery('#audio').attr('rel'),
			tmpl: 'raw'
		}, function(response){
			if (response.state == 'favorite') {
				jQuery('#audio_favorite').removeClass('favorite_inactive')
				.addClass('favorite_active').attr('rel', 'yes');
			} else {
				jQuery('#audio_favorite').removeClass('favorite_active')
				.addClass('favorite_inactive').attr('rel', 'no');
			};
		});
	}

	jQuery('#audio_favorite').click(function() {
		if (jQuery(this).attr('rel') == 'no') {
			change_state('favorite');
		} else {
			change_state('unfavorite');
		};
	});
});

