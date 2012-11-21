<?php
/*
Plugin Name: Nginx Microcache
Description: The helper plugin for the Nginx Microcache
Version: 0.1
Author: Matt Rude
Author URI: http://mattrude.com/

*/
function transition_post_status( $new, $old, $post ) {
    if ( 'publish' !== $old && 'publish' !== $new )
        return;
    $post = get_post( $post );
    $url = get_permalink( $post );

    // Purge this URL
    $this->purge( $url );

    // Purge the front page
    $this->purge( home_url( '/' ) );

    // If a Product changes, flush its Need and that Need's Department
    if ( 'product' === $post->post_type ) {
        // Flush the connected need
        $need = new WP_Query( array(
            'connected_type' => 'needs_to_products',
            'connected_items' => $post,
        ) );
        if ( $need->have_posts() ) {
            $this->purge( get_permalink( $need->posts[0] ) );
            // Now this need's connected Department
            $department = new WP_Query( array(
                'connected_type' => 'departments_to_needs',
                'connected_items' => $need->posts[0],
            ) );
            if ( $department->have_posts() )
                $this->purge( get_permalink( $department->posts[0] ) );
        }
        // If a Post changes, flush the main Blog page
    } elseif ( 'post' === $post->post_type ) {
        $this->purge( home_url( '/blog/' ) );
    }
}

function purge( $url ) {
    wp_remote_get( $url, array( 'timeout' => 0.01, 'blocking' => false, 'headers' => array( 'X-Nginx-Cache-Purge' => '1' ) ) );
}

?>
