<?php

namespace Dalen;

use Dalen\Contracts\ApplicationInterface;
use Dalen\Contracts\BootstrapInterface;
use Dalen\Contracts\DI\ServiceLocatorInterface;
use Dalen\Contracts\DI\ServiceProviderInterface;

/**
 * Class Plugin
 *
 * @package Dalen
 */
class Plugin implements ApplicationInterface
{
    protected $serviceLocator;

    /**
     * Theme constructor.
     *
     * @param ServiceLocatorInterface $serviceLocator
     */
    public function __construct( ServiceLocatorInterface $serviceLocator )
    {
        $this->serviceLocator = $serviceLocator;
    }

    /**
     * @inheritdoc
     */
    public function getServiceLocator()
    {
        return $this->serviceLocator;
    }

    /**
     * @inheritdoc
     */
    public function register( ServiceProviderInterface $serviceProvider )
    {
        $serviceProvider->register( $this->serviceLocator );
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        foreach ( $this->serviceLocator as $component ) {
            if ( $component instanceof BootstrapInterface ) {
                call_user_func( [ $component, '__bootstrap' ] );
            }
        }
    }
}
