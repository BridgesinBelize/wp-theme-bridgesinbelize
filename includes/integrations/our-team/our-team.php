<?php
/**
 * Integrates this theme with the Our Team plugin
 * http://wordpress.org/plugins/our-team-by-woothemes/
 */
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Support Declaration
 * @since   1.0.0
 * @return  void
 */
function woo_our_team_support() {
	add_theme_support( 'our-team-by-woothemes' );
}
add_action( 'after_setup_theme', 'woo_our_team_support' );


/**
 * Styles
 * @since   1.0.0
 * @return  void
 */
function woo_our_team_scripts() {
	wp_register_style( 'woo-our-team-css', get_template_directory_uri() . '/includes/integrations/our-team/css/our-team.css' );
	wp_enqueue_style( 'woo-our-team-css' );
}
add_action( 'wp_enqueue_scripts', 'woo_our_team_scripts', 10 );