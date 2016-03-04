<?php
    get_header();
    wp_head();
?>

<div class="container contentblock">
<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>
    <div class="row spacer">
    <div class="col-sm-1 hidden-md hidden-lg">
        <?php
            if ( function_exists( 'sharing_display' ) ) {
                sharing_display( '', true );
            }
        ?>
    </div>
    <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <span class="text-muted">Last updated: <?php the_date(); ?> - <?php the_time(); ?></span>
                <hr>
                <?php
                $pagename = get_query_var('pagename');
                if ($pagename == "firewall" || $pagename == "gluster")
                {
                    $filename = get_template_directory() . "/page-files/" . $pagename . ".html";
                    echo file_get_contents($filename);
                }

                else {

                    the_content();
                }
                ?>
                <hr>
            </div>
        </div>
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1 hidden-xs hidden-sm">
        <?php
            if ( function_exists( 'sharing_display' ) ) {
                sharing_display( '', true );
            }
        ?>
    </div>
    </div>
    <div>
                <!-- <center><?php the_post_thumbnail('4col', array('class' => 'img-responsive')); ?></center> -->


<?php
    endwhile;
    else:
    ?>
    <div class="row spacer">
    <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php _e('Sorry, no posts matched your criteria.'); ?>
            </div>
        </div>
    </div>
    </div>
    <?php
    endif;

?>
</div>

<?php
    get_footer();
    wp_footer();
?>
