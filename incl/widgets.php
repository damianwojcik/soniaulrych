<?php
	if (function_exists( 'register_sidebar' )) {

		register_sidebar(array(
			'name' => 'Footer Third',
			'id'  => 'footer_third',
			'before_title' => '',
			'after_title' => '',
			'before_widget' => '',
			'after_widget'  => '',
		));

		register_sidebar(array(
			'name' => 'Sidebar bloga',
			'id'  => 'blog_sidebar',
			'before_title' => '',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>',
			'before_widget' => '<div class="sidebar-list">',
		  'after_widget' => '</div>',
		));

	}

?>
