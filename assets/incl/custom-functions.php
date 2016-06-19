<?php

	if (!function_exists('theme_the_password_form')) {
		function theme_the_password_form( $form) {
			if (isset($_COOKIE['wp-postpass_' . COOKIEHASH]) && get_permalink() == wp_get_referer()) {
				$form = '<p style="color: red;">Złe hasło. Proszę spróbować ponownie.</p>' . $form;
			}
			return $form;
		}
	}
	add_filter( 'the_password_form', 'theme_the_password_form');

?>
