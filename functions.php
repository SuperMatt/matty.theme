<?php
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu')
        )
    );
}

add_action( 'init', 'register_my_menus');



function jeherve_custom_image( $media, $post_id, $args ) {
    if ( $media ) {
        return $media;
    } else {
        $permalink = get_permalink( $post_id );
        $url = apply_filters( 'jetpack_photon_url', 'https://matty.digital/wp-content/uploads/2016/02/IMG_20140308_164816-1.jpg' );

        return array( array(
            'type'  => 'image',
            'from'  => 'custom_fallback',
            'src'   => esc_url( $url ),
            'href'  => $permalink,
        ) );
    }
}
add_filter( 'jetpack_images_get_images', 'jeherve_custom_image', 10, 3 );



#add_theme_support( 'post-thumbnails' );

add_image_size('4col', 400);
add_image_size('feature_square', 64, 64, true);

function jptweak_remove_share() {
    remove_filter( 'the_content', 'sharing_display',19 );
    remove_filter( 'the_excerpt', 'sharing_display',19 );
    if ( class_exists( 'Jetpack_Likes' ) ) {
        remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
    }
}

add_action( 'loop_start', 'jptweak_remove_share' );

?>
