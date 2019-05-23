<?php

namespace Dalen;

use Dalen\Contracts\BootstrapInterface;
use Dalen\Contracts\DI\ServiceProviderInterface;
use Dalen\DI\ServiceProviderTrait;

/**
 * Class About
 *
 * @package Dalen
 */
class About implements BootstrapInterface, ServiceProviderInterface
{
    use ServiceProviderTrait;

    public function __bootstrap(): void
    {
        if ( !defined( 'DALEN_PLUGIN' ) ) {
            define( 'DALEN_PLUGIN', true );
            define( 'DALEN_PLUGIN_FILE', __FILE__ );
            define( 'DALEN_PLUGIN_VERSION', '0.3.0' );
        }
    }
}
