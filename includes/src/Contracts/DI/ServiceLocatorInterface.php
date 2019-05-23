<?php

namespace Dalen\Contracts\DI;

/**
 * Interface ServiceLocatorInterface
 *
 * @package Dalen\Contracts\DI
 */
interface ServiceLocatorInterface extends \IteratorAggregate
{
    public function set( string $id, object $component ): void;

    public function get( string $id ): ?object;

    public function has( string $id ): bool;
}
