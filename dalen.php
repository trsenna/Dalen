<?php
/**
 * Plugin Name: Dalen
 * Plugin URI:  https://github.com/trsenna/dalen
 * Author:      Thiago Senna
 * Author URI:  http://thremes.com.br
 * Description: The Dalen WordPress framework that helps make modern PHP projects possible.
 * Version:     0.1.0
 *
 * @package   Dalen
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2019, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

define( 'DALEN_PLUGIN', true );
define( 'DALEN_PLUGIN_FILE', __FILE__ );
define( 'DALEN_PLUGIN_VERSION', get_file_data( __FILE__, [ 'Version' ] )[ 0 ] );


# ------------------------------------------------------------------------------
# Compatibility check.
# ------------------------------------------------------------------------------
#
# Check that the site meets the minimum requirements for the plugin
# before proceeding.
#

require_once( __DIR__ . '/includes/bootstrap-compat.php' );


# ------------------------------------------------------------------------------
# Bootstrap the plugin.
# ------------------------------------------------------------------------------
#
# Maybe load the bootstrap files. Note that autoloading should happen
# first so that any classes/functions are available that we might need.
#

add_action( 'dalen/compat/safe', function () {

    require_once( __DIR__ . '/includes/bootstrap-autoload.php' );
    require_once( __DIR__ . '/includes/bootstrap-genesis.php' );
    require_once( __DIR__ . '/includes/bootstrap-plugin.php' );
    require_once( __DIR__ . '/includes/bootstrap-theme.php' );

} );
