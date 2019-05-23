<?php

namespace Dalen\View;

use Dalen\Contracts\View\ViewNamesInterface;

/**
 * Class ViewNames
 *
 * @package Dalen\View
 */
class ViewNames implements ViewNamesInterface
{
    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $name;

    /**
     * ViewNames constructor.
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
    public function names(): array
    {
        $names = [];

        if ( '' !== $this->name ) {
            $names[] = "{$this->slug}-{$this->name}";
        }

        $names[] = "{$this->slug}";

        return $names;
    }

    /**
     * @inheritdoc
     */
    public function getIterator()
    {
        return new \ArrayIterator( $this->names() );
    }
}
