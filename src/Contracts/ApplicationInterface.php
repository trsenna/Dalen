<?php

namespace Dalen\Contracts;

use Dalen\Contracts\DI\ServiceLocatorInterface;
use Dalen\Contracts\DI\ServiceProviderInterface;

/**
 * Interface ApplicationInterface
 *
 * @package Dalen\Contracts
 */
interface ApplicationInterface
{
    public function getServiceLocator(): ServiceLocatorInterface;

    public function register( ServiceProviderInterface $serviceProvider ): void;

    public function run(): void;
}
