<!-- Citation: Code is copied from TECHCareers class, written by Warren Uhrich
                BORROWED CODE BEGINS HERE
-------------------------------------------------------->

<?php

register_nav_menus(
    array(
        'main_menu'   => 'Main Menu (Header)',
        'footer_menu' => 'Footer Menu', 
    )
);

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_script( 
        'techcareers-theme-scripts', // A name for the file
        get_theme_file_uri( '/assets/js/scripts.js' ), // Public path to the script file
        array(), // Dependencies
        strftime( get_theme_file_uri( '/assets/js/scripts.js' ) ), // <--- Version number (based on time to fight broswer cache!)
        FALSE // Should it output in the wp_footer()?
    );
    wp_enqueue_style(
        'techcareers-theme-main-styles',
        get_theme_file_uri( '/assets/css/main.css' ), // Public path to the style file
        strftime( get_theme_file_uri( '/assets/css/main.css' ) ), // <--- Version number (based on time to fight broswer cache!)
        'all' // Type of media we are targeting
    );
} );

?>

<!-- BORROWED CODE ENDS HERE --------->