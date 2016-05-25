<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
