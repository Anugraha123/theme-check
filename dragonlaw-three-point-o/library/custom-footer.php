<?php



add_action( 'widgets_init', 'get_dl_footer');



function get_dl_footer() {
		register_sidebar( array( 
		'name' => __('First div Footer', 'techinterest'),
		'id' => 'first_footer_column',
		'description' => 'First Footer Column',
		'before_widget' => '<div class="%2$s column small-6 large-3 footer-col">',
		'after_widget' => '</div>',
		'before_title' => '<p class="widgettitle">',
		'after_title' => '</p>',
		) );

	register_sidebar( array( 
		'name' => __('Second div Footer', 'techinterest'),
		'id' => 'second_footer_column',
		'description' => 'Second Footer Column',
		'before_widget' => '<div class="%2$s column small-6 large-3 footer-col">',
		'after_widget' => '</div>',
		'before_title' => '<p class="widgettitle">',
		'after_title' => '</p>',
		) );

	register_sidebar( array( 
		'name' => __('Third div Footer', 'techinterest'),
		'id' => 'third_footer_column',
		'description' => 'Third Footer Column',
		'before_widget' => '<div class="%2$s column small-6 large-3 footer-col">',
		'after_widget' => '</div>',
		'before_title' => '<p class="widgettitle">',
		'after_title' => '</p>',
		) );

	register_sidebar( array( 
		'name' => __('Fourth div Footer', 'techinterest'),
		'id' => 'fourth_footer_column',
		'description' => 'Fourth Footer Column',
		'before_widget' => '<div class="%2$s column small-6 large-3 footer-col">',
		'after_widget' => '</div>',
		'before_title' => '<p class="widgettitle">',
		'after_title' => '</p>',
		) );
	$footer = array();
	$footer = dynamic_sidebar('first_footer_column');
	$footer = dynamic_sidebar('second_footer_column');
	$footer = dynamic_sidebar('third_footer_column');
	$footer = dynamic_sidebar('fourth_footer_column');
	return array('footer' => $footer);
}

function getSiteIcons(){
    global $wpdb;
    $rows = $wpdb->get_results("SELECT title AS ITitle, url AS IUrl, image_url1 AS IImage, target AS Itarget from `".$wpdb->prefix."cn_social_icon` where icon_for=2 OR icon_for=3 ORDER BY sortorder");
    // print_r($rows); die();
    return $rows;
}

?>