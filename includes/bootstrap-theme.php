<?php

namespace Dalen;

# ------------------------------------------------------------------------------
# Perform bootstrap actions.
# ------------------------------------------------------------------------------
#
# Creates an action hook for themes to hook into the
# bootstrapping process.
#

add_action( 'after_setup_theme', function () {
    do_action( 'dalen/bootstrap/theme' );
}, PHP_INT_MIN );
