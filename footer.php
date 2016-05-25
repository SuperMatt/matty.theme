<?php

if (is_single()): ?>

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

        </div>
        <script id="dsq-count-scr" src="https://mattydigital.disqus.com/count.js" async></script>
    </body>
<!--  -->
<link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/style.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400|Roboto+Mono:100,300,400' rel='stylesheet' type='text/css'>
<link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/wordpress.css">
<?php wp_head(); ?>
<?php wp_footer(); ?>
<script>
DISQUSWIDGETS.getCount({reset: true});
</script>
</html>
