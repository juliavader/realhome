<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name');?></title>
    <?php wp_head() ;?>
</head>
<body ">

<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between pt-3">
<div class="container">
        <?php
        if( function_exists( 'the_custom_logo' ) ) {
            if(has_custom_logo()) {
                the_custom_logo();
            } else {
                echo bloginfo('name');
            }
        }
        ;?>

    <div class="principal-menu" id="navbarSupportedContent">
        <?php wp_nav_menu( array( 'theme_location' => 'PC-menu' ) ); ?>
    </div>

    <div class="rs-menu" id="navbarSupportedContent">

        <?php wp_nav_menu( array( 'theme_location' => 'RS-menu' ) ); ?>
    </div>

    <button id="myBtn" class ="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
</div>
</nav>
