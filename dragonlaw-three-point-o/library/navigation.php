<?php

// Top Navigation Menu

register_nav_menus( array( 
	'primary' => __('Dragonlaw 3.0')
) );

function dragonlaw_topbar($screen = 'small') {
	$args = array(
		'theme_location' => 'primary',
		'container' => '',
        'items_wrap'      => '%3$s'
	);
	return wp_nav_menu($args);
}

?>