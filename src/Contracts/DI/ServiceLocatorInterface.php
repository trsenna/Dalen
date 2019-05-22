<?php

namespace Dalen\Contracts\DI;

/**
 * Interface ServiceLocatorInterface
 *
 * @package Dalen\Contracts\DI
 */
interface ServiceLocatorInterface extends \IteratorAggregate
{
    public function set( $id, $component );

    public function get( $id );

    public function has( $id );
}
