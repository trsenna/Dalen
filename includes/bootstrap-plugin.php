<?php

namespace Dalen;

# ------------------------------------------------------------------------------
# Perform bootstrap actions.
# ------------------------------------------------------------------------------
#
# Creates an action hook for plugins to hook into the
# bootstrapping process.
#

do_action( 'dalen/bootstrap' );
do_action( 'dalen/bootstrap/plugins' );
