<?php /* Template Name: Home */ ?>

<?php
    wp_head();
    get_header();
?>

<div class="container contentblock">
<div class="row spacer">

<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php the_title(); ?>
            </div>
            <div class="panel-body">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php the_post_thumbnail('4col', array('class' => 'img-rounded img-responsive')); ?>
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
