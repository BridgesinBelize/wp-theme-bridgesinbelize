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
			if ( 'true' == $settings['homepage_enable_content'] ) {
				switch ( $settings['homepage_content_type'] ) {
					case 'page':
					get_template_part( 'includes/specific-page-content' );
					break;

					case 'posts':
					default:
					get_template_part( 'includes/blog-posts' );
					break;
				}
			}

			if ( 'true' == $settings['homepage_enable_features'] ) {
				do_action( 'woothemes_features', array( 'title' => $settings['homepage_features_title'], 'limit' => $settings['homepage_number_of_features'] ) );
			}

            mdr_new_blog_posts();
			if ( 'true' == $settings['homepage_enable_testimonials'] ) {
				do_action( 'woothemes_testimonials', array( 'title' => $settings['homepage_testimonials_title'], 'limit' => $settings['homepage_number_of_testimonials'] ) );
			}

			if ( is_woocommerce_activated() && 'true' == $settings['homepage_enable_featured_products'] ) {
				get_template_part( 'includes/featured-products' );
			}
    	?>
		<?php } ?>
		<?php woo_main_after(); ?>

    </div><!-- /#content -->
		
<?php get_footer(); ?>
