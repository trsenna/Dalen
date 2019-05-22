<?php

namespace Dalen\View;

use Dalen\Contracts\View\ViewInterface;
use Dalen\Contracts\View\ViewLocateInterface;

/**
 * Class View
 *
 * @package Dalen\View
 */
class View implements ViewInterface
{
    protected $viewLocate;

    /**
     * AbstractView constructor.
     *
     * @param ViewLocateInterface $viewLocate
     */
    public function __construct( ViewLocateInterface $viewLocate )
    {
        $this->viewLocate = $viewLocate;
    }

    /**
     * @inheritdoc
     */
    public function render( array $context = [] )
    {
        if ( !file_exists( $this->viewLocate->locate() ) ) {
            return '';
        }

        ob_start();

        extract( $context );
        include( $this->viewLocate->locate() );

        return ob_get_clean();
    }
}
