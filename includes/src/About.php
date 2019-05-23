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
            define( 'DALEN_PLUGIN_FILE', $this->getPluginFile() );
            define( 'DALEN_PLUGIN_VERSION', $this->getPluginVersion() );
        }
    }

    public function getPluginFile(): string
    {
        return trailingslashit( dirname( __DIR__, 2 ) ) . 'dalen.php';
    }

    public function getPluginVersion(): string
    {
        return get_file_data( $this->getPluginFile(), [ 'Version' ] )[ 0 ];
    }
}
