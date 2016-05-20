<?php
    get_header();
?>

<?php
$postCount = 1;
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<div class="row">
    <div class="col-xs-12 post-details">
        <h1>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h1>
        <p class="highlight">
            <?php the_author();?> - <?php the_date(); ?> - <?php the_time(); ?>
        </p>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 post">
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
    </div>
</div>

<?php
        if ($postCount != sizeof($posts)) {
            ?><div class="post-spacer">&nbsp;</div><?php
        }
        else {
            ?><div class="post-end">&nbsp;</div><?php
        }
        $postCount++;
    endwhile;
    else:
?>
<div class="row">
    <div class="col-xs-12">
        <h1>404</h1>
        <p class="highlight"><?php _e('Post not found.'); ?></highlight>
    </div>
</div>
<?php
    endif;
?>


<?php
    get_footer();
?>
