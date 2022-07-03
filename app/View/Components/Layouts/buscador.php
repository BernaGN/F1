<?php

namespace App\View\Components\layouts;

use Illuminate\View\Component;

class buscador extends Component
{

    public $route, $buscar, $activo, $show;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $buscar, $activo = null, $show = false)
    {
        $this->route = $route;
        $this->buscar = $buscar;
        $this->activo = $activo;
        $this->show = $show;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.buscador');
    }
}
