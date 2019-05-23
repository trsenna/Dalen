<?php

namespace Dalen;

use Dalen\Contracts\ApplicationInterface;
use Dalen\Contracts\BootstrapInterface;
use Dalen\Contracts\DI\ServiceLocatorInterface;
use Dalen\Contracts\DI\ServiceProviderInterface;

/**
 * Class Theme
 *
 * @package Dalen
 */
class Theme implements ApplicationInterface
{
    /**
     * @var ServiceLocatorInterface
     */
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
    public function getServiceLocator(): ServiceLocatorInterface
    {
        return $this->serviceLocator;
    }

    /**
     * @inheritdoc
     */
    public function register( ServiceProviderInterface $serviceProvider ): void
    {
        $serviceProvider->register( $this->serviceLocator );
    }

    /**
     * @inheritdoc
     */
    public function run(): void
    {
        foreach ( $this->serviceLocator as $component ) {
            if ( $component instanceof BootstrapInterface ) {
                call_user_func( [ $component, '__bootstrap' ] );
            }
        }
    }
}
