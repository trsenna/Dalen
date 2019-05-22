<?php

namespace Dalen\View;

use Dalen\Contracts\View\ViewLocateInterface;

/**
 * Class ThemeLocate
 *
 * @package Dalen\View
 */
class ThemeLocate implements ViewLocateInterface
{
    private $slug;
    private $name;

    /**
     * ThemeLocate constructor.
     *
     * @param string      $slug
     * @param string|null $name
     */
    public function __construct( $slug, $name = null )
    {
        $this->slug = $slug;
        $this->name = (string)$name;
    }

    /**
     * @inheritdoc
     */
    public function locate()
    {
        $templates = [];

        $name = (string)$this->name;
        if ( '' !== $name ) {
            $templates[] = "{$this->slug}-{$this->name}.tpl.php";
        }

        $templates[] = "{$this->slug}.tpl.php";

        return locate_template( $templates, false );
    }
}
