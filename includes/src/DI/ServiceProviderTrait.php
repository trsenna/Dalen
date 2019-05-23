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
    public function register( ServiceLocatorInterface $serviceLocator ): void
    {
        $serviceLocator->set( static::class, $this );
    }
}
