<?php

namespace Dalen\View;

use Dalen\Contracts\View\ViewLocateInterface;
use Dalen\Contracts\View\ViewNamesInterface;

/**
 * Class PluginLocate
 *
 * @package Dalen\View
 */
class PluginLocate implements ViewLocateInterface
{
    /**
     * @var string
     */
    private $baseDir;

    /**
     * PluginLocate constructor.
     *
     * @param $baseDir
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
