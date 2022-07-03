<?php

namespace App\View\Components\layouts;

use Illuminate\View\Component;

class vacio extends Component
{

    public $title, $text, $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = '¡Aviso!', $text = 'No hay registros, agrega informacion o aplica otros filtos', $type = 'warning')
    {
        $this->title = $title;
        $this->text = $text;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.vacio');
    }
}
