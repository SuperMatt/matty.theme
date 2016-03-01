<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500|Open+Sans|Comfortaa' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <title><?php the_title() ?></title>
    <link rel='stylesheet' href="<?php get_template_directory_uri(); ?>">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row topbar">
        <div class="col-sm-12 navigation">
          <div class="hidden-sm hidden-xs">
            <span class="pull-left">
              <div class="title"><?php bloginfo('name'); ?></div>
            </span>
            <span class="pull-right">
              <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'list list-inline' ) ); ?>
            </span>
          </div>
          <div class="hidden-md hidden-lg">
            <button class="btn btn-link pull-left title navglyph" data-toggle="modal" data-target="#menu"><span class="glyphicon glyphicon-menu-hamburger navglyph"></span></button>
            <span class="pull-left">
              <div class="title">matty.digital</div>
            </span>
            <div class="modal" id="menu" tab-index="-1" role="dialog">
              <div class="row topbar">
              <div class="col-sm-12 navigation">
                <button class="btn btn-link pull-left title navglyph" data-toggle="modal" data-target="#menu" style="padding-left: 27px"><span class="glyphicon glyphicon-remove navglyph"></span></button>
                <span>
                  <div class="title">matty.digital</div>
                </span>
                <span>
                  <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'list list-unstyled' ) ); ?>
                </span>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
