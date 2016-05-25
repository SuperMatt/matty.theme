<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta property="og:image" content="https://matty.digital/wp-content/uploads/2016/02/IMG_20140308_164816-1.jpg">
        <meta property="og:url" content="<?php the_permalink(); ?>">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Matthew Ames (matty.digital)">
        <meta property="fb:app_id" content="363735137130472">

        <?php
        if (!is_single()) {
            query_posts('posts_per_page=1');

            if ( have_posts() ) : while ( have_posts() ) : the_post();
                    ?><meta property="og:description" content="<?php echo substr(htmlspecialchars(get_the_content()),0, 300); ?>"><?php
                endwhile;
            endif;
            wp_reset_query();
        }
        else {
            ?><meta property="og:description" content="matty.digital - homepage for Matthew Ames"><?php
        }
        ?> -->
        <title><?php bloginfo('name'); ?></title>
        <link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/style.css">
        <script type="application/ld+json">
        {
          "@context": "http://schema.org/",
          "@type": "Person",
          "name": "Matthew Ames",
          "jobTitle": "Systems Administrator",
          "url": "https://matty.digital"
        }
        </script>
    </head>
    <body>
        <div class="main shadow-light">
            <div class="head">
                <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            </div>
            <div class="navi">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'list list-inline' ) ); ?>
            </div>
