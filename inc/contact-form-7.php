<?php

// De-register Contact Form 7 CSS files on all pages without a Contact form
add_action( 'wp_print_styles', 'web_profile_cf7_deregister_styles', 100 );
function web_profile_cf7_deregister_styles() {
    if ( ! is_page( array( 'contact', 'contact-us', 'feedback' ) ) ) {
        wp_deregister_style( 'contact-form-7' );
    }
}

// De-register Contact Form 7 JavaScript files on all pages without a Contact form
add_action( 'wp_print_scripts', 'web_profile_cf7_deregister_javascript', 100 );
function web_profile_cf7_deregister_javascript() {
    if ( ! is_page( array( 'contact', 'contact-us', 'feedback' ) ) ) {
        wp_deregister_script( 'contact-form-7' );
    }
}
