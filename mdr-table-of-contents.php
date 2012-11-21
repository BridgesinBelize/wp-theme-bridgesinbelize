<?php
/**
 * Plugin Name: MDR Table of Contents
 * Plugin URI: https://gist.github.com/4109124
 * Description: This plugin will create a Table of Contents on a page or post with the use of the shortcode of [table_of_contents].  There is no styling in the output from within the plugin.
 * Version: 0.1.0
 * Author: Matt Rude
 * Author URI: http://mattrude.com/
 */

/*-----------------------------------------------------------------------------------*/
/* Table of Contents - Shortcode */
/*-----------------------------------------------------------------------------------*/

if ( ! function_exists( 'mdr_shortcode_table_of_contents' ) ) {
        function mdr_shortcode_table_of_contents ( $atts, $content = null ) {
                global $post;
                $defaults = array();

                $atts = shortcode_atts( $defaults, $atts );

                extract( $atts );

                $table_of_contents = mdr_get_table_of_contents( $post->post_content );

                $html = '';
                if ( isset( $table_of_contents['list'] ) && $table_of_contents['list'] != '<ul></ul>' ) {
                        $html = '<div id="mdr-table-of-contents" class="table_of_contents fl">' . '<h3>' . __( 'Page Table of Contents', 'mdr-toc' ) . '</h3>' . $table_of_contents['list'] . '</div>' . "\n";
                }

                return apply_filters( 'mdr_shortcode_table_of_contents', $html, $atts );
        } // End mdr_shortcode_table_of_contents()
}

add_shortcode( 'table_of_contents', 'mdr_shortcode_table_of_contents' );

/*-----------------------------------------------------------------------------------*/
/* Table of Contents - Content Filter */
/*-----------------------------------------------------------------------------------*/

add_filter( 'the_content', 'mdr_table_of_contents_section_anchors', 10 );

if ( ! function_exists( 'mdr_table_of_contents_section_anchors' ) ) {
        function mdr_table_of_contents_section_anchors ( $content ) {
                $data = mdr_get_table_of_contents( $content );

                foreach ( $data['sections_with_ids'] as $k => $v ) {
                        $content = str_replace( $data['sections'][$k], $v, $content );
                }

                return $content;
        } // End mdr_table_of_contents_section_anchors()
}

/*-----------------------------------------------------------------------------------*/
/* Table of Contents - Automation */
/*-----------------------------------------------------------------------------------*/

if ( isset( $mdr_options['mdr_auto_tableofcontents'] ) && ( apply_filters( 'mdr_auto_tableofcontents', $mdr_options['mdr_auto_tableofcontents'] ) != 'false' ) ) {
        add_filter( 'the_content', 'mdr_table_of_contents_automation', 10 );
}

if ( ! function_exists( 'mdr_table_of_contents_automation' ) ) {
        function mdr_table_of_contents_automation ( $content ) {
                if ( is_singular() && in_the_loop() ) {
                        $content = '[table_of_contents] ' . $content;
                }

                return $content;
        } // End mdr_table_of_contents_automation()
}

/*-----------------------------------------------------------------------------------*/
/* Table of Contents - Generator */
/*-----------------------------------------------------------------------------------*/

if ( ! function_exists( 'mdr_get_table_of_contents' ) ) {
        function mdr_get_table_of_contents ( $content ) {
          preg_match_all( "/(<h([0-6]{1})[^<>]*>)([^<>]+)(<\/h[0-6]{1}>)/", $content, $matches, PREG_SET_ORDER );
          $count = 0; // List Item Count
          $level = 1; // Heading Level
          $list = array();
          $sections = array();
          $sections_with_ids = array();

          foreach ( $matches as $val ) {
                $count++;

                if ( $val[2] == $level ) { // If the heading level didnÃ¢change.
                        $list[$count] = '<li><a href="#section-' . $count . '">'. $val[3] . '</a>';

                } else if ( $val[2] > $level ) { // If bigger then last heading level, create a nested list.
                        $list[$count] = '<ul><li><a href="#section-' . $count . '">'. $val[3] . '</a>';

                } else if ( $val[2] < $level ) { // If less then last Heading Level, end nested list.
                        $list[$count] = '</ul></li><li><a href="#section-' . $count . '">'. $val[3] . '</a>';
                }

                $sections[$count] = $val[1] . $val[3] . $val[4]; // Original heading to be Replaced.
                $sections_with_ids[$count] = '<h' . $val[2] . ' id="section-' . $count . '">' . $val[3] . $val[4]; // This is the new Heading.

                $level = $val[2];
          }

          switch ( $level ) { // Final markup fix, used if the list ended on a subheading, such as h3, h4. Etc.
            case 2:
             $list[$count] .= '</li>';
            break;
            case 3:
             $list[$count] .= '</ul></li>';
            break;
            case 4:
             $list[$count] .= '</ul></li></ul></li>';
            break;
            case 5:
             $list[$count] .= '</ul></li></ul></li></ul></li>';
            break;
            case 6:
             $list[$count] .= '</ul></li></ul></li></ul></li></ul></li></ul></li>';
            break;
          }

          // Setup container to store rendered HTML.
          $html = '';

          foreach ( $list as $k => $v ) { // Puts together the list.
            $html .= $v;
          }

          $html = stripslashes( $html );

          // Add opening and closing <ul> tags only when necessary.
          if ( substr( $html, 0, 4 ) != '<ul>' ) {
                $html = '<ul>' . $html;
          }

          if ( substr( $html, -5 ) != '</ul>' ) {
                $html .= '</ul>';
          }

          return array( 'list' => $html, 'sections' => $sections, 'sections_with_ids' => $sections_with_ids ); // Returns the content
        } // End mdr_get_table_of_contents()
}
?>
