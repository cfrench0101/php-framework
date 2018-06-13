<?php


# Include html header
include( APP_VIEW . '/header.php' );

# Include main navigation
include( APP_VIEW . '/nav.php' );

switch ( $route->getAction() ) {

    case 'about':
        include( APP_VIEW .'/about/aboutSubNav.php' );
        include( APP_VIEW .'/about/aboutView.php' );
        break;

    default:
        include( APP_VIEW .'/about/aboutSubNav.php' );
        include( APP_VIEW .'/about/aboutView.php' );
        break;
}


# Include html footer
include( APP_VIEW . '/footer.php' );
