<?php

namespace App\View\Components\Buttons;

use Illuminate\View\Component;

class dropdownEliminar extends Component
{

    public $value, $route, $permiso, $viewId, $methodShow;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($value, $route, $permiso = "", $viewId = true, $methodShow = false)
    {
        $this->value = $value;
        $this->route = $route;
        $this->permiso = $permiso;
        $this->viewId = $viewId;
        $this->methodShow = $methodShow;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.buttons.dropdown-eliminar');
    }
}
