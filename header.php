<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?></title>
    </head>
    <body>
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 shadow-light main">
                <div class="row">
                    <div class="col-xs-12 head">
                        <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 navi">
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'list list-inline' ) ); ?>
                    </div>
                </div>
