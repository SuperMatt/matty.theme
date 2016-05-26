<?php
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu')
        )
    );
}

add_action( 'init', 'register_my_menus');

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Navi Widgets',
		'id'            => 'navi_widget',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );



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

function fb_home_image( $tags ) {
    if ( is_home() || is_front_page() ) {
        // Remove the default blank image added by Jetpack
        unset( $tags['og:image'] );

        $fb_home_img = 'https://matty.digital/wp-content/uploads/2016/02/IMG_20140308_164816-1.jpg';
        $tags['og:image'] = esc_url( $fb_home_img );
    }
    return $tags;
}
add_filter( 'jetpack_open_graph_tags', 'fb_home_image' );



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
