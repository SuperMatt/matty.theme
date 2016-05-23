<?php if (is_single()): ?>

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
<?php endif ?>
            </div>
        </div>
        <?php wp_head(); ?>
        <?php wp_footer(); ?>
    </body>
</html>
