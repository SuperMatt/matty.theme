<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500|Open+Sans|Comfortaa' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <title><?php the_title() ?></title>
    <link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/wordpress.css">
    <link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/style.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row topbar">
        <div class="col-sm-12 navigation">
          <div class="hidden-sm hidden-xs">
            <span class="pull-left">
              <div class="title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
            </span>
            <span class="pull-right">
              <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'list list-inline' ) ); ?>
            </span>
          </div>
          <div class="hidden-md hidden-lg">
            <div class="dropdown" id="dropdown-parent">
                <button type="button" class="btn btn-link title" id="dropdownmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="glyphicon glyphicon-menu-hamburger navglyph"></span>
                </button>
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'dropdown-menu', 'container'=>false, 'items_wrap' => '<ul aria-labelledby="dropdownmenu" id="%1$s" class="%2$s">%3$s</ul>') ); ?>
            </div>
            <div class="title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
          </div>
        </div>
      </div>
    </div>
