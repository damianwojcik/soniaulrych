<?php

  add_theme_support('menus');

  add_theme_support( 'post-thumbnails' );

  add_image_size ( article_tiles, 600, 600, false );

  add_image_size ( huge, 2048, 2048, false );

  add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );

  add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
	add_action( 'wp_footer', 'enqueue_scripts' );


	function enqueue_styles() {

		// load styles
		wp_enqueue_style( 'reset_styles', THEME_URL .'/assets/css/base.css' );
		wp_enqueue_style( 'gridset', THEME_URL .'/assets/css/gridset.css' );
		wp_enqueue_style( 'owl_styles', THEME_URL .'/assets/css/owl.carousel.css' );
		wp_enqueue_style( 'site_styles', THEME_URL .'/style.css' );
		wp_enqueue_style( 'wpcore', THEME_URL .'/assets/css/wpcore.css' );
		wp_enqueue_style( 'responsive', THEME_URL .'/assets/css/responsive.css' );

	}


	function enqueue_scripts() {

		// load scripts
		wp_enqueue_script("jquery");
		wp_enqueue_script( 'owl_carousel', THEME_URL . '/assets/js/owl.carousel.min.js' );
		wp_enqueue_script( 'site_scripts', THEME_URL . '/assets/js/scripts.js' );

	}
