<?php

namespace Dalen\View;

use Dalen\Contracts\View\ViewLocateInterface;

/**
 * Class PluginLocate
 *
 * @package Dalen\View
 */
class PluginLocate implements ViewLocateInterface
{
    private $slug;
    private $name;

    private $baseDir = null;

    /**
     * PluginLocate constructor.
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
     * @param string $baseDir
     */
    public function setBaseDir( $baseDir )
    {
        $this->baseDir = $baseDir;
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
