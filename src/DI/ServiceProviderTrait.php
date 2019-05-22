<?php

namespace Dalen\DI;

use Dalen\Contracts\DI\ServiceLocatorInterface;

/**
 * Trait ServiceProviderTrait
 *
 * @package Dalen\DI
 */
trait ServiceProviderTrait
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     */
    public function register( ServiceLocatorInterface $serviceLocator )
    {
        $serviceLocator->set( static::class, $this );
    }
}
