<?php

namespace Dalen\Contracts\DI;

/**
 * Interface ServiceProviderInterface
 *
 * @package Dalen\Contracts\DI
 */
interface ServiceProviderInterface
{
    public function register( ServiceLocatorInterface $serviceLocator );
}
