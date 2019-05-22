<?php

namespace Dalen\Contracts;

use Dalen\Contracts\DI\ServiceProviderInterface;

/**
 * Interface ApplicationInterface
 *
 * @package Dalen\Contracts
 */
interface ApplicationInterface
{
    public function getServiceLocator();

    public function register( ServiceProviderInterface $serviceProvider );

    public function run();
}
