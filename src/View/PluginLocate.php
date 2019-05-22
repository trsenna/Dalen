<?php

namespace Dalen\View;

use Dalen\Contracts\View\ViewLocateInterface;
use Dalen\Contracts\View\ViewNameInterface;

/**
 * Class PluginLocate
 *
 * @package Dalen\View
 */
class PluginLocate implements ViewLocateInterface
{
    private $baseDir;

    /**
     * PluginLocate constructor.
     *
     * @param $baseDir
     */
    public function __construct( $baseDir )
    {
        $this->baseDir = $baseDir;
    }

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

        $located = '';
        foreach ( (array)$templates as $template ) {
            if ( file_exists( trailingslashit( $this->baseDir ) . $template ) ) {
                $located = trailingslashit( $this->baseDir ) . $template;
                break;
            }
        }

        return $located;
    }
}
