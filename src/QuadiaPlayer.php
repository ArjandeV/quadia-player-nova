<?php

namespace ArjandeV\QuadiaPlayer;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Http\Requests\NovaRequest;

class QuadiaPlayer extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-quadiaplayer-field';

    protected function fillAttributeFromRequest(NovaRequest $request, $requestAttribute, $model, $attribute)
    {
        if ($request->exists($requestAttribute)) {
            $model->{$attribute} = $request[$requestAttribute];
        }
    }
}
