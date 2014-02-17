<?php
/**
 * This is the Main Function file for the Bridges in Belize theme
 * @package bridgesinbelize
 */
/**
 * Deregister the JetPack Widgets css
 *
 * Deregister all JetPack CSS for Wdigets so we may use our own for
 * styling reasons.  These CSS files have been brought into the main
 * style.less & style.css files.
 *
 * @package bridgesinbelize
 * @author Matt Rude (mattrude.com)
 * @since version 0.1
 */
function jetpack_deregister_styles() {
    wp_deregister_style( 'jetpack-widgets' );
    wp_deregister_style( 'sharedaddy' );
    wp_deregister_style( 'sharing' );
    wp_deregister_style( 'woo-layout' );
}
add_action( 'wp_print_styles', 'jetpack_deregister_styles', 100 );

/**
 * Remove query strings from static resources
 *
 * This function will remove the query scrings from static
 * resources in WordPress.  This will not affect all plugins,
 * but will affect plugins built correctly.
 *
 * @param string $src The location of the script to remove the version from.
 * 
 * @package bridgesinbelize
 * @author Matt Rude (mattrude.com)
 * @since version 0.1
 */
function mdr_remove_script_version( $src ){
    $parts = explode( '?', $src );
    return $parts[0];
}
add_filter( 'script_loader_src', 'mdr_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', 'mdr_remove_script_version', 15, 1 );

/**
 * Disable the woo_custom_typography function
 *
 * This function disables the woo_custom_typography functions
 * found within ../definition/includes/theme-actions.php
 * intern this disables the custom typography function in definition
 * see includes/fonts for more on how these changes work.
 *
 * @package bridgesinbelize
 * @author Matt Rude (mattrude.com)
 * @since version 0.1
 */
function woo_custom_typography() {
    // This is a empty function
}

/**
 * Disable the woo_output_custom_css function
 *
 * This function disables the woo_output_custom_css functions
 * found within ../definition/functions/admin-setup.php
 * intern this disables the custom.css function in definition
 *
 * @package bridgesinbelize
 * @author Matt Rude (mattrude.com)
 * @since version 0.1
 */
function woo_output_custom_css() {
    // This is a empty function
}

/**
 * Disable the woo_output_alt_stylesheet function
 *
 * This function disables the woo_output_alt_stylesheet functions
 * found within ../definition/functions/admin-setup.php
 * intern this disables the default.css function in definition
 *
 * @package bridgesinbelize
 * @author Matt Rude (mattrude.com)
 * @since version 0.1
 */
function woo_output_alt_stylesheet() {
    // This is a empty function
}

/**
 * Restore woo_alt_stylesheet back to default.css
 *
 * @package bridgesinbelize
 * @author Matt Rude (mattrude.com)
 * @since version 0.1
 */
function mdr_restore_woo_stylesheet() {
    if (get_option('woo_alt_stylesheet')) {
        if (get_option('woo_alt_stylesheet') != "default.css") {
            update_option('woo_alt_stylesheet', "default.css");
        }
    }
}

add_action( 'after_setup_theme', 'mdr_restore_woo_stylesheet' );

function custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**
 * Blog posts on main page
 *
 * @package bridgesinbelize
 * @author Matt Rude (mattrude.com)
 * @since version 0.2.0
 */
function mdr_new_blog_posts() {
    if (have_posts()) { ?>
        <div id="home-blog" class="feature">
            <h2></h2>
            <h3 class="feature-title"><a href="/blog">Recent Posts</a></h3>
            <?php query_posts("posts_per_page=5");
            while (have_posts()) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                    <?php the_excerpt(); ?>
                </li>
            <?php endwhile; ?>
        </div>
    <?php }
}

?>
