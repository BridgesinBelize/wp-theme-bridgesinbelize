<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * Footer Template
 *
 * Here we setup all logic and XHTML that is required for the footer section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
	global $woo_options;

	$settings = array(
				'connect_facebook' => '', 
				'connect_twitter' => ''
				);
					
	$settings = woo_get_dynamic_values( $settings );

	$total = 4;
	if ( isset( $woo_options['woo_footer_sidebars'] ) && ( $woo_options['woo_footer_sidebars'] != '' ) ) {
		$total = $woo_options['woo_footer_sidebars'];
	}
?>
	
	<?php woo_footer_before(); ?>
	
	<footer id="footer">
	
		<?php

		if ( ( woo_active_sidebar( 'footer-1' ) ||
			   woo_active_sidebar( 'footer-2' ) ||
			   woo_active_sidebar( 'footer-3' ) ||
			   woo_active_sidebar( 'footer-4' ) ) && $total > 0 ) {
		
		?>
			
			<section id="footer-widgets" class="col-full col-<?php echo $total; ?> fix">
			
				<?php $i = 0; while ( $i < $total ) { $i++; ?>
				    <?php if ( woo_active_sidebar( 'footer-' . $i ) ) { ?>
				
				<div class="block footer-widget-<?php echo $i; ?>">
    		        <?php woo_sidebar( 'footer-' . $i ); ?>
				</div>
				
			        <?php } ?>
				<?php } // End WHILE Loop ?>
			
			</section><!-- /#footer-widgets  -->
		
		<?php } // End IF Statement ?>
	
		<div class="col-full">
	
			<div id="credit" class="col-right">
				<?php if ( '' != $settings['connect_twitter'] || '' != $settings['connect_facebook'] ) { ?>
				<div class="footer-social">
		   		    <?php if ( '' != $settings['connect_facebook'] ) { ?><a href="<?php echo esc_url( $settings['connect_facebook'] ); ?>" class="facebook" title="<?php esc_attr_e( 'Connect on Facebook', 'woothemes' ); ?>"></a><?php } ?>
		   		    <?php if ( '' != $settings['connect_twitter'] ) { ?><a href="<?php echo esc_url( $settings['connect_twitter'] ); ?>" class="twitter" title="<?php esc_attr_e( 'Follow on Twitter', 'woothemes' ); ?>"></a><?php } ?>
				</div>
				<?php } ?>
			
			<?php if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'footer-menu' ) ) {
				wp_nav_menu( array( 'depth' => 1, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'footer-nav', 'menu_class' => 'nav', 'theme_location' => 'footer-menu' ) );
			} elseif ( isset( $woo_options['woo_footer_right'] ) && $woo_options['woo_footer_right'] == 'true' ) {
	
	        	echo stripslashes( $woo_options['woo_footer_right_text'] );
	
			} else { ?>
				<p><?php _e( 'Powered by', 'woothemes' ); ?> <a href="http://www.wordpress.org">WordPress</a>. <?php _e( 'Designed by', 'woothemes' ); ?> <a href="<?php echo ( isset( $woo_options['woo_footer_aff_link'] ) && ! empty( $woo_options['woo_footer_aff_link'] ) ? esc_url( $woo_options['woo_footer_aff_link'] ) : 'http://www.woothemes.com' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/woothemes.png" width="74" height="19" alt="Woo Themes" /></a></p>
			<?php } ?>
			
			</div>
			
			<div id="copyright" class="col-left">
			<?php if( isset( $woo_options['woo_footer_left'] ) && $woo_options['woo_footer_left'] == 'true' ) {
	
					echo stripslashes( $woo_options['woo_footer_left_text'] );
	
			} else { ?>
				<p><?php bloginfo(); ?> &copy; <?php echo date( 'Y' ); ?>. <?php _e( 'All Rights Reserved.', 'woothemes' ); ?></p>
			<?php } ?>
			</div>
			
		</div>

	</footer><!-- /#footer  -->

</div><!-- /#wrapper -->
<?php wp_footer(); ?>
<?php woo_foot(); ?>
</body>
</html>