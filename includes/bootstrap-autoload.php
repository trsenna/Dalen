<?php

namespace Dalen;

use function Composer\Autoload\includeFile;

# ------------------------------------------------------------------------------
# Run the Composer autoloader.
# ------------------------------------------------------------------------------
#
# Registers a set of PSR-4 directories for a given namespace,
# replacing any others previously set for this namespace.
#

if ( file_exists( dirname( __DIR__ ) . '/vendor/autoload.php' ) ) {
    require_once( dirname( __DIR__ ) . '/vendor/autoload.php' );
}
