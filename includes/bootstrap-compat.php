<?php

# ------------------------------------------------------------------------------
# Maybe display error messages.
# ------------------------------------------------------------------------------
#
# Maybe display an error message based on wether minimum requirements
# wasn't met.
#

add_action( 'dalen/compat/unsafe', function () {
    add_action( 'admin_notices', function () {

        $plugin_data = get_plugin_data(
            trailingslashit( dirname( __DIR__ ) ) . 'dalen.php'
        );

        printf(
            '<div class="error"><p>%s</p></div>',
            __( "Minimal requirements are not satisfied by {$plugin_data['Name']} plugin. Please, ask 
            for some help from your developer or just deactivate the plugin.", 'dalen' )
        );

    } );
} );


# ------------------------------------------------------------------------------
# Checks if it's a safe environment.
# ------------------------------------------------------------------------------
#
# This section checks if minimal requirements is satisfied and notify
# by hooks if the environment is safe or unsafe.
#

$safe = version_compare( $GLOBALS[ 'wp_version' ], '5.2', '>=' );
$safe = $safe && version_compare( PHP_VERSION, '7.2', '>=' );

if ( $safe ) do_action( 'dalen/compat/safe' );
if ( !$safe ) do_action( 'dalen/compat/unsafe' );
