<?php

namespace Dalen\View;

use Dalen\Contracts\View\ViewLocateInterface;
use Dalen\Contracts\View\ViewNameInterface;

/**
 * Class ThemeLocate
 *
 * @package Dalen\View
 */
class ThemeLocate implements ViewLocateInterface
{
    /**
     * @inheritdoc
     */
    public function locate( ViewNameInterface $viewName )
    {
        $templates = [];

        if ( '' !== $viewName->name() ) {
            $templates[] = "{$viewName->slug()}-{$viewName->name()}.tpl.php";
        }

        $templates[] = "{$viewName->slug()}.tpl.php";

        return locate_template( $templates, false );
    }
}
