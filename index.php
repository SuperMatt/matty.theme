<?php
    get_header();
    wp_head();
?>

<div class="container contentblock">
<div class="row spacer">
<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-body">
            <h2><?php the_title(); ?></h2>
            <p class="text-muted"><?php the_date(); ?> - <?php the_time(); ?></p>
            <hr>
            <?php the_content(); ?>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-body">
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
<?php
    endwhile;
    else:
        _e('Sorry, no posts matched your criteria.');
    endif;
?>
</div>
</div>

<?php
    get_footer();
    wp_footer();
?>
