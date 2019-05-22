<?php

namespace Dalen\Contracts\View;

/**
 * Interface ViewLocateInterface
 *
 * @package Dalen\Contracts\View
 */
interface ViewLocateInterface
{
    public function locate( $slug, $name = null );
}
