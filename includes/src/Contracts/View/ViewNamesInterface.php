<?php

namespace Dalen\Contracts\View;

/**
 * Interface ViewNamesInterface
 *
 * @package Dalen\Contracts\View
 */
interface ViewNamesInterface extends \IteratorAggregate
{
    public function names(): array;
}
