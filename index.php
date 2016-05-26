<?php
    get_header();
?>
<div class="container">
<div class="posts">
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

<?php if (is_single()): ?>

<div class="previous">
    <div class="link-btn"><?php previous_post_link('%link', 'Previous: %title'); ?></div>
</div>
<div class="next">
    <div class="link-btn"><?php next_post_link('%link', 'Next: %title'); ?></div>
</div>
<?php else: ?>
<div class="previous">
    <div class="link-btn"><?php previous_posts_link('Newer'); ?></div>
</div>
<div class="next">
    <div class="link-btn"><?php next_posts_link('Older'); ?></div>
</div>
<?php endif; ?>

<?php endif; ?>

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
<div class="post">
<h1>404</h1>
<p class="highlight"><?php _e('Post not found.'); ?></highlight>
</div>
<?php
    endif;
?>
</div>
<div class="widgets">
    <?php if ( is_active_sidebar( 'navi_widget' ) ) : ?>
        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
            <?php dynamic_sidebar( 'navi_widget' ); ?>
        </div><!-- #primary-sidebar -->
    <?php endif; ?>
</div>
</div>

<?php
    get_footer();
?>
