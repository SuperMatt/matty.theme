<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?></title>c
        <link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/style.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="main shadow-light">
            <div class="head">
                <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            </div>
            <div class="col-xs-12 navi">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'list list-inline' ) ); ?>
            </div>
