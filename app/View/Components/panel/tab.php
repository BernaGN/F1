<?php

namespace App\View\Components\panel;

use Illuminate\View\Component;

class tab extends Component
{

    public $condicion, $items, $seleccion;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($condicion, $items, $seleccion)
    {
        $this->condicion = $condicion;
        $this->items = $items;
        $this->seleccion = $seleccion;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.panel.tab');
    }
}
