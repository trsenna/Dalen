<?php
/**
 * Plugin Name: Dalen
 * Plugin URI: https://github.com/trsenna/Dalen
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 * Description: The Dalen WordPress framework that helps make modern PHP projects possible.
 * Version: 0.1.0
 *
 * @package   Dalen
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2019, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

# ------------------------------------------------------------------------------
# Compatibility check.
# ------------------------------------------------------------------------------
#
# Check that the site meets the minimum requirements for the plugin before
# proceeding.
#

$safe = require_once( __DIR__ . '/includes/bootstrap-compat.php' );
if ( !$safe ) return;

# ------------------------------------------------------------------------------
# Bootstrap the plugin.
# ------------------------------------------------------------------------------
#
# Load the bootstrap files. Note that autoloading should happen first so that
# any classes/functions are available that we might need.
#

//require_once( __DIR__ . '/includes/bootstrap-autoload.php' );
//require_once( __DIR__ . '/includes/bootstrap-plugin.php' );
