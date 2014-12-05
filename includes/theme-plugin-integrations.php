<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Checks if plugins are activated and loads logic accordingly.
 * @uses  class_exists() detect if a class exists
 * @uses  function_exists() detect if a function exists
 * @uses  defined() detect if a constant is defined
 */

/**
 * Projects
 * @link http://wordpress.org/plugins/projects-by-woothemes/
 */
if ( class_exists( 'Projects' ) ) {
	require_once( get_template_directory() . '/includes/integrations/projects/setup.php' );
	require_once( get_template_directory() . '/includes/integrations/projects/template.php' );
	require_once( get_template_directory() . '/includes/integrations/projects/functions.php' );
}

/**
 * Our Team
 * @link http://wordpress.org/plugins/our-team/
 */
if ( class_exists( 'Woothemes_Our_Team' ) ) {
	require_once( get_template_directory() . '/includes/integrations/our-team/our-team.php' );
}

/**
 * Homepage Control Actions
 * @link http://wordpress.org/plugins/homepage-control/
 */
add_action( 'homepage', 'woo_homepage_featured_products', 10, 1 );
add_action( 'homepage', 'woo_homepage_features', 10, 1 );
add_action( 'homepage', 'woo_homepage_testimonials', 10, 1 );
add_action( 'homepage', 'woo_homepage_content', 10, 1 );
add_action( 'homepage', 'woo_homepage_recent_projects', 10, 1 );
add_action( 'homepage', 'woo_homepage_our_team', 10, 1 );