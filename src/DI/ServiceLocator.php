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
    public function set( $id, $component )
    {
        unset( $this->components[ $id ] );

        if ( is_object( $component ) ) {
            $this->components[ $id ] = $component;
        }
    }

    /**
     * @inheritdoc
     */
    public function get( $id )
    {
        if ( isset( $this->components[ $id ] ) ) {
            return $this->components[ $id ];
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    public function has( $id )
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
