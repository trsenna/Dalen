<?php

namespace Dalen\View;

use Dalen\Contracts\View\ViewLocateInterface;
use Dalen\Contracts\View\ViewNamesInterface;

/**
 * Class PluginViewLocate
 *
 * @package Dalen\View
 */
class PluginViewLocate implements ViewLocateInterface
{
    /**
     * @var string
     */
    private $baseDir;

    /**
     * PluginViewLocate constructor.
     *
     * @param string $baseDir
     */
    public function __construct( string $baseDir )
    {
        $this->baseDir = (string)$baseDir;
    }

    /**
     * @inheritdoc
     */
    public function locate( ViewNamesInterface $viewNames ): string
    {
        $located = '';

        foreach ( $viewNames as $name ) {
            if ( file_exists( trailingslashit( $this->baseDir ) . "{$name}.tpl.php" ) ) {
                $located = trailingslashit( $this->baseDir ) . "{$name}.tpl.php";
                break;
            }
        }

        return $located;
    }
}
