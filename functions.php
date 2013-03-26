<?php

// Define the text domain as a constant so we can easily replace it throughout the theme
define( 'DOMAIN', 'minimal' );

/**
 * Register main menu.
 */
register_nav_menus(
	array(
		'primary'	=>	__( 'Primary Menu', DOMAIN),
	)
);

/**
 * SASS/SCSS Stylesheet Definition.
 */
function generate_css() {
  if(function_exists('wpsass_define_stylesheet')) {
	  wpsass_define_stylesheet("mystyle.scss", true);
	}
}
add_action('after_setup_theme', 'generate_css' );
