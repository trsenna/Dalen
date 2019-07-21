<?php

namespace Dalen;

# ------------------------------------------------------------------------------
# Perform bootstrap actions.
# ------------------------------------------------------------------------------
#
# Creates an action hook for genesis theme to hook into the
# bootstrapping process.
#

add_action( 'genesis_init', function () {
    do_action( 'dalen/bootstrap/genesis/init' );
}, PHP_INT_MIN );


add_action( 'genesis_setup', function () {
    do_action( 'dalen/bootstrap/genesis' );
    do_action( 'dalen/bootstrap/genesis/setup' );
}, PHP_INT_MIN );
