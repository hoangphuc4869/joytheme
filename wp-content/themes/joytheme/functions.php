<?php
function m_register_menu()
{
	register_nav_menus(
		array(
			'menu-1' => __('Menu PC'),
			
		)
	);
}
add_action('init', 'm_register_menu');


// /* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

// Thêm ảnh đại diện
add_theme_support('post-thumbnails');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

 ?>