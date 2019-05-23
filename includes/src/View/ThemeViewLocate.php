<?php

namespace Dalen\View;

use Dalen\Contracts\View\ViewLocateInterface;
use Dalen\Contracts\View\ViewNamesInterface;

/**
 * Class ThemeViewLocate
 *
 * @package Dalen\View
 */
class ThemeViewLocate implements ViewLocateInterface
{
    /**
     * @inheritdoc
     */
    public function locate( ViewNamesInterface $viewNames ): string
    {
        $templates = [];

        foreach ( $viewNames as $name ) {
            $templates[] = "{$name}.tpl.php";
        }

        return locate_template( $templates, false );
    }
}
