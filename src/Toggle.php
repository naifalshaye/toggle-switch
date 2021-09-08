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

    public function onColor($on_color)
    {
        return $this->withMeta([
            'on_color' => $on_color
        ]);
    }

    public function offColor($off_color)
    {
        return $this->withMeta([
            'off_color' => $off_color
        ]);
    }
}
