<?php
    get_header();
?>

<?php
$postCount = 1;
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<div class="post-details">
    <h1>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h1>
    <p class="highlight">
        <?php the_author();?> - <?php the_date(); ?> - <?php the_time(); ?>
    </p>
</div>
<div class="post">
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

<?php if (!is_single()): ?>

<div class="post-commentnumber">
    <a class="commentnumber" href="<?php echo get_permalink(); ?>#disqus_thread" data-disqus-identifier="<?php echo get_the_ID(); ?> <?php echo home_url(); ?>/?p=<?php echo get_the_ID(); ?>">0 Comments</a>
</div>

<?php else: ?>
<div class="comments">
<?php
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
?>
</div>

<?php endif; ?>

<?php
        if ($postcount == 0) {
            ?><meta property="og:description" content="<?php echo htmlspecialchars(get_the_content()); ?>"><?php
        }
        else if ($postCount != sizeof($posts)) {
            ?><div class="post-spacer">&nbsp;</div><?php
        }
        else {
            ?><div class="post-end">&nbsp;</div><?php
        }
        $postCount++;
    endwhile;
    else:
?>
<div class="post">
<h1>404</h1>
<p class="highlight"><?php _e('Post not found.'); ?></highlight>
</div>
<?php
    endif;
?>


<?php
    get_footer();
?>
