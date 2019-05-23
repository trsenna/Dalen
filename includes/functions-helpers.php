<?php

namespace Dalen;

use Dalen\DI\ServiceLocator;

/**
 * Get the plugin instance.
 *
 * @return Plugin
 */
function plugin(): Plugin
{
    static $plugin;

    if ( !isset( $plugin ) ) {
        $locator = new ServiceLocator();
        $plugin = new Plugin( $locator );
    }

    return $plugin;
}

/**
 * Get the component instance from service locator.
 *
 * @param $key
 *
 * @return object|null
 */
function component( $key ): ?object
{
    $locator = plugin()->getServiceLocator();
    $component = $locator->get( $key );

    return $component;
}
