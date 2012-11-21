<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * Page Content Component
 *
 * Display content from a specified page.
 *
 * @author Matty
 * @since 1.0.0
 * @package WooFramework
 * @subpackage Component
 */
$settings = array(
				'homepage_page_id' => '', 
				'thumb_single' => 'false', 
				'single_w' => 200, 
				'single_h' => 200, 
				'thumb_single_align' => 'alignright'
				);
					
$settings = woo_get_dynamic_values( $settings );

if ( 0 < intval( $settings['homepage_page_id'] ) ) {

$query = new WP_Query( 'page_id=' . intval( $settings['homepage_page_id'] ) );
?>

<section class="page-content component">	
<?php woo_loop_before(); ?>

<?php
	if ( $query->have_posts() ) {
		$count = 0;
		while ( $query->have_posts() ) { $query->the_post(); $count++;
?>
<?php echo woo_embed( 'width=580' ); ?>
<?php if ( $settings['thumb_single'] == 'true' && ! woo_embed( '' ) ) { woo_image( 'width=' . $settings['single_w'] . '&height=' . $settings['single_h'] . '&class=thumbnail ' . $settings['thumb_single_align'] ); } ?>

<header>

<h1><?php the_title(); ?></h1>

</header>

<section class="entry fix">
	<div id="main" class="col-left">
<?php the_content(); ?>
<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'woothemes' ), 'after' => '</div>' ) ); ?>
	</div><!--/.col-left-->
<?php get_sidebar(); ?>
</section>
				
<?php the_tags( '<p class="tags">'.__( 'Tags: ', 'woothemes' ), ', ', '</p>' ); ?>
<?php
		} // End WHILE Loop
	
	} else {
?>
    <article <?php post_class(); ?>>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'woothemes' ); ?></p>
    </article><!-- /.post -->
<?php } ?> 

<?php woo_loop_after(); ?> 
</section>
<?php } // End the main check ?>