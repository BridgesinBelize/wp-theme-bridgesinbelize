<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * Featured Products Component
 *
 * Display X recent featured products.
 *
 * @author Matty
 * @since 1.0.0
 * @package WooFramework
 * @subpackage Component
 */
global $woocommerce;

$settings = array(
				'homepage_number_of_products' => 5
				);
					
$settings = woo_get_dynamic_values( $settings );

?>

<div class="featured-products widget">
	
	<h2><?php _e( 'Featured Products', 'woothemes' ); ?></h2>
	
	<ul class="products">
<?php
$i = 0;

$args = array( 'post_type' => 'product', 'posts_per_page' => intval( $settings['homepage_number_of_products'] ) );

$args['meta_query'] = array();
$args['meta_query']['relation'] = 'AND';
$args['meta_query'][] = array( 'key' => '_featured', 'value' => 'yes', 'compare' => '=' );
$args['meta_query'][] = array( 'key' => '_visibility', 'value' => array( 'visible', 'catalog' ), 'compare' => 'IN' );
$args['meta_query'][] = array( 'key' => '_stock_status', 'value' => array( 'outofstock' ), 'compare' => 'NOT IN' );

$count = 0;
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); $_product = &new WC_Product( $loop->post->ID ); $count++;
?>

			<li class="product<?php if( ($count % 3) == 0 ) { echo ' last'; } ?>">
				<?php woocommerce_show_product_sale_flash( $post, $_product ); ?>
				<a href="<?php echo get_permalink( $loop->post->ID ); ?>" title="<?php // echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
<?php
if ( has_post_thumbnail( $loop->post->ID ) ) {
	echo get_the_post_thumbnail( $loop->post->ID, 'shop_single' );
} else {
	echo '<img src="' . $woocommerce->plugin_url() . '/assets/images/placeholder.png" alt="Placeholder" width="' . $woocommerce->get_image_size( 'shop_single_image_width' ) . 'px" height="' . $woocommerce->get_image_size( 'shop_single_image_height' ) . 'px" />';
}
?>

				<h3><?php the_title(); ?></h3>
				
				<span class="price"><?php echo $_product->get_price_html(); ?></span>
				
				<section class="entry">
					<?php the_excerpt(); ?>
				</section>

				<?php woocommerce_template_loop_add_to_cart( $loop->post, $_product ); ?>
				
				</a>

			</li>
	<?php endwhile; ?>

	</ul><!--/.featured-1-->
	
</div>