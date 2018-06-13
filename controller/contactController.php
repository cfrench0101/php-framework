<?php


# Include html header
include( APP_VIEW . '/header.php' );

# Include main navigation
include( APP_VIEW . '/nav.php' );

switch ( $route->getAction() ) {

    case 'contact':
        include( APP_VIEW .'/contact/contactSubNav.php' );
        include( APP_VIEW .'/contact/contactView.php' );
        break;

    default:
        include( APP_VIEW .'/contact/contactSubNav.php' );
        include( APP_VIEW .'/contact/contactView.php' );
        break;
}


# Include html footer
include( APP_VIEW . '/footer.php' );
