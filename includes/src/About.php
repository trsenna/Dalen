<?php

namespace Dalen;

use Dalen\Contracts\DI\ServiceProviderInterface;
use Dalen\DI\ServiceProviderTrait;

/**
 * Class About
 *
 * @package Dalen
 */
class About implements ServiceProviderInterface
{
    use ServiceProviderTrait;

    /**
     * Get the plugin filename.
     *
     * @return string
     */
    public function getPluginFile(): string
    {
        return DALEN_PLUGIN_FILE;
    }

    /**
     * Get the plugin version.
     *
     * @return string
     */
    public function getPluginVersion(): string
    {
        return DALEN_PLUGIN_VERSION;
    }
}
