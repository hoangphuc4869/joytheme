<?php
function m_register_menu()
{
	register_nav_menus(
		array(
			'menu-1' => __('Menu PC'),
			'menu-2' => __('Menu Mobile'),
			
		)
	);
}
add_action('init', 'm_register_menu');


// function allow_line_breaks_in_titles($title) {

// return str_replace('[br]', '<br>', $title);

// }

// add_filter('the_title', 'allow_line_breaks_in_titles');


// /* Disable WordPress Admin Bar for all users */
// add_filter( 'show_admin_bar', '__return_false' );

// Thêm ảnh đại diện
add_theme_support('post-thumbnails');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

 ?>