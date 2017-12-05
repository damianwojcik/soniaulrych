<?php

    add_theme_support('menus');

    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 100, 100 );

    add_image_size ( article_tiles, 600, 600, false );

    add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );

    add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
    add_action( 'wp_footer', 'enqueue_scripts' );

    // Adds class to pagination links
    add_filter('next_posts_link_attributes', 'posts_link_attributes');
    add_filter('previous_posts_link_attributes', 'posts_link_attributes');

	function posts_link_attributes() {
	    return 'class="btn"';
	}


	function enqueue_styles() {

		// load styles
        wp_enqueue_style( 'ubuntu_font', 'https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300&subset=latin-ext', '', NULL);
        wp_enqueue_style( 'sourcesans_font', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600&subset=latin-ext', '', NULL);
        wp_enqueue_style( 'oswald_font', 'https://fonts.googleapis.com/css?family=Oswald:400,300,700&subset=latin-ext', '', NULL);
        wp_enqueue_style( 'site_styles', THEME_URL .'/style.min.css' );

	}


	function enqueue_scripts() {

		// load scripts
		wp_enqueue_script("jquery");
        wp_enqueue_script( 'google_map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyA9aVIw6lKrsfeN2MRIJEF8kqMKyIgf4AA' , '', NULL);
		wp_enqueue_script( 'site_scripts', THEME_URL . '/assets/js/scripts.min.js' );

	}
