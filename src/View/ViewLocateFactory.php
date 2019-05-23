<?php

namespace Dalen\View;

use Dalen\Contracts\View\ViewLocateInterface;
use Dalen\Contracts\View\ViewNamesInterface;

/**
 * Class ViewLocateFactory
 *
 * @package Dalen\View
 */
abstract class ViewLocateFactory
{
    /**
     * @return ViewLocateInterface
     */
    public static function theme(): ViewLocateInterface
    {
        return new class implements ViewLocateInterface
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
        };
    }

    /**
     * @param string $baseDir
     *
     * @return ViewLocateInterface
     */
    public static function plugin( string $baseDir ): ViewLocateInterface
    {
        return new class( $baseDir ) implements ViewLocateInterface
        {
            /**
             * @var string
             */
            private $baseDir;

            /**
             *  constructor.
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
        };
    }
}
