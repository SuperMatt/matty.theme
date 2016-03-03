<?php
    get_header();
    wp_head();
?>

<div class="container contentblock">
<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>
    <div class="row spacer">
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-body">
            <h1><a href="<?php get_post_permalink(); ?>"><?php the_title(); ?></a></h1>
            <p class="text-muted">Last updated: <?php the_date(); ?> - <?php the_time(); ?></p>
            <hr>
            <?php the_content(); ?>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <center><?php the_post_thumbnail('4col', array('class' => 'img-responsive')); ?></center>
                <?php
                if ( function_exists( 'sharing_display' ) ) {
                    sharing_display( '', true );
                }

                if ( class_exists( 'Jetpack_Likes' ) ) {
                    $custom_likes = new Jetpack_Likes;
                    echo $custom_likes->post_likes( '' );
                }
                ?>
            </div>
        </div>
    </div>
    </div>
<?php
    endwhile;
    else:
        _e('Sorry, no posts matched your criteria.');
    endif;
?>
</div>

<?php
    get_footer();
    wp_footer();
?>
