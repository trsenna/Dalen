<?php

namespace Dalen\View;

use Dalen\Contracts\View\ViewInterface;
use Dalen\Contracts\View\ViewLocateInterface;
use Dalen\Contracts\View\ViewNamesInterface;

/**
 * Class View
 *
 * @package Dalen\View
 */
class View implements ViewInterface
{
    /**
     * @var ViewNamesInterface
     */
    protected $viewNames;

    /**
     * @var ViewLocateInterface
     */
    protected $viewLocate;

    /**
     * View constructor.
     *
     * @param ViewNamesInterface  $viewNames
     * @param ViewLocateInterface $viewLocate
     */
    public function __construct(
        ViewNamesInterface $viewNames,
        ViewLocateInterface $viewLocate )
    {
        $this->viewNames = $viewNames;
        $this->viewLocate = $viewLocate;
    }

    /**
     * @inheritdoc
     */
    public function render( array $context = [] ): string
    {
        if ( !file_exists( $this->viewLocate->locate( $this->viewNames ) ) ) {
            return '';
        }

        ob_start();

        extract( $context );
        include( $this->viewLocate->locate( $this->viewNames ) );

        return ob_get_clean();
    }
}
