<?php

namespace Dalen\View;

use Dalen\Contracts\View\ViewLocateInterface;
use Dalen\Contracts\View\ViewNamesInterface;

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
    public function locate( ViewNamesInterface $viewNames ): string
    {
        $templates = [];

        foreach ( $viewNames as $name ) {
            $templates[] = "{$name}.tpl.php";
        }

        return locate_template( $templates, false );
    }
}
