<?php

namespace Dalen\DI;

use Dalen\Contracts\DI\ServiceLocatorInterface;

/**
 * Class ServiceLocator
 *
 * @package Dalen\DI
 */
class ServiceLocator implements ServiceLocatorInterface
{
    protected $components = [];

    /**
     * @inheritdoc
     */
    public function set( string $id, object $component ): void
    {
        unset( $this->components[ $id ] );
        $this->components[ $id ] = $component;
    }

    /**
     * @inheritdoc
     */
    public function get( $id ): ?object
    {
        if ( isset( $this->components[ $id ] ) ) {
            return $this->components[ $id ];
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    public function has( $id ): bool
    {
        return isset( $this->components[ $id ] );
    }

    /**
     * @inheritdoc
     */
    public function getIterator()
    {
        return new \ArrayIterator( $this->components );
    }
}
