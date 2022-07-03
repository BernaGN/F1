<?php

namespace App\View\Components\Modals;

use Illuminate\View\Component;

class modalEliminarRestaurar extends Component
{

    public $route, $value, $method, $message, $type, $bgColor;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $value, $method, $message, $type, $bgColor = "danger")
    {
        $this->route = $route;
        $this->value = $value;
        $this->method = $method;
        $this->message = $message;
        $this->type = $type;
        $this->bgColor = $bgColor;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modals.modal-eliminar-restaurar');
    }
}
