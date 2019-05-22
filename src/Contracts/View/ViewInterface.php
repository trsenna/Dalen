<?php

namespace Dalen\Contracts\View;

/**
 * Interface ViewInterface
 *
 * @package Dalen\Contracts\View
 */
interface ViewInterface
{
    public function render( array $context = [] );
}
