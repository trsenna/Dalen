<?php

# ------------------------------------------------------------------------------
# Minimal WP/PHP requirements.
# ------------------------------------------------------------------------------
#
# This section checks if PHP and WordPress has their minimal
# requirements satisfied.
#

$safe = version_compare( $GLOBALS[ 'wp_version' ], '5.2', '>=' );
$safe = $safe && version_compare( PHP_VERSION, '7.2', '>=' );

# ------------------------------------------------------------------------------
# Maybe display error messages.
# ------------------------------------------------------------------------------
#
# Maybe display an error message based on wether minimum requirements
# wasn't met.
#

if ( !$safe ) {
    add_action( 'admin_notices', function () {

        $plugin_name = basename( dirname( __DIR__ ) );

        printf(
            '<div class="error"><p>%s</p></div>',
            __( "Minimal requirements are not satisfied by {$plugin_name} plugin. Please, ask 
            for some help from your developer or just deactivate the plugin.", 'functionality' )
        );

    } );
}

# ------------------------------------------------------------------------------
# Return if it's safe environment.
# ------------------------------------------------------------------------------
#
# Just return a positive or negative status about how safe is
# running this plugin with the current WordPress environment.
#

return $safe;
