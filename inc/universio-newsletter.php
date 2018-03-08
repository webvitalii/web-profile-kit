<?php

// De-register Newsletter CSS files on all pages without a Newsletter form
add_action( 'wp_print_styles', 'universio_newsletter_deregister_styles', 100 );
function universio_newsletter_deregister_styles() {
    if ( ! is_page( array( 'newsletter', 'subscribe' ) ) ) {
        wp_deregister_style( 'newsletter-subscription' );
    }
}

// De-register Newsletter JavaScript files on all pages without a Newsletter form
add_action( 'wp_print_scripts', 'universio_newsletter_deregister_javascript', 100 );
function universio_newsletter_deregister_javascript() {
    if ( ! is_page( array( 'newsletter', 'subscribe' ) ) ) {
        wp_deregister_script( 'newsletter-subscription' );
    }
}
