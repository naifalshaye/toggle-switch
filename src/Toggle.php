<?php

namespace Naif\Toggle;

use Laravel\Nova\Fields\Field;

class Toggle extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'toggle';

    public function color($color)
    {
        return $this->withMeta([
            'color' => $color
        ]);
    }

}
