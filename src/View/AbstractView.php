<?php

namespace Dalen\View;

use Dalen\Contracts\View\ViewInterface;
use Dalen\Contracts\View\ViewLocateInterface;

/**
 * Class AbstractView
 *
 * @package Dalen\View
 */
abstract class AbstractView implements ViewInterface, ViewLocateInterface
{
    protected $slug;
    protected $name;

    /**
     * AbstractView constructor.
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
    public function render( array $context = [] )
    {
        if ( !file_exists( $this->locate( $this->slug, $this->name ) ) ) {
            return '';
        }

        ob_start();

        extract( $context );
        include( $this->locate( $this->slug, $this->name ) );

        return ob_get_clean();
    }
}
