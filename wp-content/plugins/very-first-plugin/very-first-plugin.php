<?php

/**
* Plugin Name: Very First Plugin
* Plugin URI: http://taivonurk.ikt.khk.ee/
* Description: This is the very first plugin I ever created.
* Version: 1.0
* Author: Taivo Nurk
* Author URI: http://taivonurk.ikt.khk.ee/
**/

function new_excerpt_more($more) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more', 21 );

function the_excerpt_more_link( $excerpt ){
    $post = get_post();
    $excerpt .= '... <a href="'. get_permalink($post->ID) . '">Loe edasi!</a>.';
    return $excerpt;
}
add_filter( 'the_excerpt', 'the_excerpt_more_link', 21 );
?>