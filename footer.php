<?php

if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;

if (is_single()): ?>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="link-btn"><?php previous_post_link('%link', 'Previous: %title'); ?></div>
                    </div>
                    <div class="col-sm-4 col-sm-offset-4">
                        <div class="link-btn"><?php next_post_link('%link', 'Next: %title'); ?></div>
                    </div>
                </div>
<?php else: ?>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="link-btn"><?php previous_posts_link('Newer'); ?></div>
                    </div>
                    <div class="col-sm-4 col-sm-offset-4">
                        <div class="link-btn"><?php next_posts_link('Older'); ?></div>
                    </div>
                </div>
<?php endif; ?>

            </div>
        </div>
        <script id="dsq-count-scr" src="https://mattydigital.disqus.com/count.js" async></script>
    </body>
<link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/wordpress.css">
<link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/style.css">
<?php wp_head(); ?>
<?php wp_footer(); ?>
</html>
