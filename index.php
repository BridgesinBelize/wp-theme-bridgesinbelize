<?php
// File Security Check
if ( ! function_exists( 'wp' ) && ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?><?php
/**
 * Index Template
 *
 * Here we setup all logic and XHTML that is required for the index template, used as both the homepage
 * and as a fallback template, if a more appropriate template file doesn't exist for a specific context.
 *
 * @package WooFramework
 * @subpackage Template
 */
	get_header();
	global $woo_options;

	$settings = array(
				'homepage_enable_content' => 'true',
				'homepage_enable_featured_products' => 'true',
				'homepage_content_type' => 'posts',
				'homepage_enable_features' => 'true',
				'homepage_enable_testimonials' => 'true',
				'homepage_features_title' => '',
				'homepage_testimonials_title' => '',
				'homepage_number_of_features' => 3,
				'homepage_number_of_testimonials' => 3,
				);

	$settings = woo_get_dynamic_values( $settings );
?>

    <div id="content" class="col-full">

    	<?php woo_main_before(); ?>

    	<?php if ( is_home() && ! dynamic_sidebar( 'homepage' ) ) {

    		do_action( 'homepage', $settings );

		} ?>

		<?php woo_main_after(); ?>

    </div><!-- /#content -->

<?php get_footer(); ?>