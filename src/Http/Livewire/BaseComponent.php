<?php

namespace Zofe\Rapyd\Http\Livewire;


use Livewire\Component;
use Spatie\Permission\Exceptions\UnauthorizedException;

abstract class BaseComponent extends Component
{
    protected $rules = [];

    public function addRule($field, $rule)
    {
        $this->rules[$field] = $rule;
    }

    public function render()
    {
        return '';
    }
}
