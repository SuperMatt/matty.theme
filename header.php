<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
        <link href="http://overpass-30e2.kxcdn.com/overpass.css" rel="stylesheet" />
        <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <title><?php bloginfo('name'); ?></title>
        <link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/wordpress.css">
        <link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/style.css">
        <?php wp_head(); ?>
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
