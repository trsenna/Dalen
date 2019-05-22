<?php

namespace Dalen\View;

use Dalen\Contracts\View\ViewInterface;
use Dalen\Contracts\View\ViewLocateInterface;
use Dalen\Contracts\View\ViewNameInterface;

/**
 * Class View
 *
 * @package Dalen\View
 */
class View implements ViewInterface
{
    protected $viewName;
    protected $viewLocate;

    /**
     * View constructor.
     *
     * @param ViewNameInterface   $viewName
     * @param ViewLocateInterface $viewLocate
     */
    public function __construct(
        ViewNameInterface $viewName,
        ViewLocateInterface $viewLocate )
    {
        $this->viewName = $viewName;
        $this->viewLocate = $viewLocate;
    }

    /**
     * @inheritdoc
     */
    public function render( array $context = [] )
    {
        if ( !file_exists( $this->viewLocate->locate( $this->viewName ) ) ) {
            return '';
        }

        ob_start();

        extract( $context );
        include( $this->viewLocate->locate( $this->viewName ) );

        return ob_get_clean();
    }
}
