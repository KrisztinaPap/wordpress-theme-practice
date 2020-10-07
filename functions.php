<?php

register_nav_menus(
    array(
        'main_menu'   => 'Main Menu (Header)',
        'footer_menu' => 'Footer Menu', 
    )
);

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_script( 
        'techcareers-theme-scripts',
        get_theme_file_uri( '/assets/js/scripts.js' ),
        array(), // Dependencies
        strftime( get_theme_file_uri( '/assets/js/scripts.js' ) ), // <--- Version number (based on time to fight broswer cache!)
        FALSE // Should it output in the wp_footer()?
    );

} );


?>