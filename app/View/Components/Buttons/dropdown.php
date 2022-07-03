<?php

namespace App\View\Components\buttons;

use Illuminate\View\Component;

class dropdown extends Component
{

    public $value, $route;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($value, $route)
    {
        $this->value = $value;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.buttons.dropdown');
    }
}
