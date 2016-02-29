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
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php the_post_thumbnail('4col', array('class' => 'img-rounded', 'style' => 'width: 100%')); ?>
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
