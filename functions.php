<?php
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu')
        )
    );
}

add_action( 'init', 'register_my_menus');

add_theme_support( 'post-thumbnails' );

add_image_size('4col', 400);

function jptweak_remove_share() {
    remove_filter( 'the_content', 'sharing_display',19 );
    remove_filter( 'the_excerpt', 'sharing_display',19 );
    if ( class_exists( 'Jetpack_Likes' ) ) {
        remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
    }
}

add_action( 'loop_start', 'jptweak_remove_share' );

?>
