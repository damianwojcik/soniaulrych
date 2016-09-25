<?php

	//sets different number of posts per pagination for category 'strefa-klienta'
	add_filter('pre_get_posts', function($query){
	    if(!$query->is_main_query()) return;
	    if(!is_category('strefa-klienta')) return;
	 
	    $query->set('posts_per_page', 15);
	});

?>