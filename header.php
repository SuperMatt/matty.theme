<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500|Open+Sans|Comfortaa' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <title><?php the_title() ?></title>
    <style>

      body {
        font-family: Raleway;
        background-color: #EEE
      }

      .topbar {
        background-color: #F44336;
        color: #fff;
        min-height: 60px;
      }

      .title {
        font-family: comfortaa;
        padding-top: 7px;
        font-size: 32px;
        min-height: 60px;
      }

      .navigation {
        font-family: raleway;
        padding-left: 15px;
        padding-right: 15px;
        min-height: 60px;
        margin-bottom: -10px;
      }

      .navigation li {
        padding-top: 20px;
        size: 20px;
        padding-bottom: 20px;
        height: 60px;
        vertical-align: middle;
        padding-left: 5px;
        padding-right: 5px;
      }

      li.current-menu-item {
        background-color: #D50000;
      }

      .navigation li:hover {
        background-color: #ff5252;
      }

      .navigation li a {
        padding-top: 20px;
        color: #fff;
        padding-bottom: 20px;
      }
      .navigation li a:hover {
        text-decoration: none;
      }

      @media (min-width: 1170px) {
        .navigation {
          padding-left: 60px;
          padding-right: 60px;
        }

      }

      @media (max-width: 991px) {
        .navglyph{
          color: #fff;
        }

        .popup-menu {
          font-size: 24px;
          font-family: comfortaa;
          color: #FFF;
          background-color: #F44336;
          height: 100%;
        }
        .popup-menu a {
          margin-left: 27px;
        }

      .popup-menu li {
          height: 50px;
          padding-top: 10px;
        }
      }

      .spacer {
        margin-top: 25px;
      }


    </style>
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
