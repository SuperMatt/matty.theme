<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?></title>


<style>
body {
    background-color: #fafafa;
    font-family: Roboto;
    font-weight: 300;
    font-size: 11pt;
}

.main {
    min-height: 100%;
    background-color: #ffffff;
}

.head {
    font-family: "Roboto";
    font-weight: 100;
    background-color: #d32f2f;
    /* background: linear-gradient(#d32f2f, #b71c1c); */
    color: #fafafa;
    font-size: 33pt;
}

.navi {
    position:relative;
    background-color: #ff6f00;
    color: #fafafa;
    padding-top: 8px;
    font-weight: 400;
}
</style>
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
