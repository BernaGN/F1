<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class header extends Component
{

    public $title, $message, $route, $type, $modalName, $icon, $excel, $agregar;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $message, $route, $icon, $modalName = "", $type = "redirect", $excel = false, $agregar = true)
    {
        $this->title = $title;
        $this->message = $message;
        $this->route = $route;
        $this->type = $type;
        $this->modalName = $modalName;
        $this->icon = $icon;
        $this->excel = $excel;
        $this->agregar = $agregar;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.header');
    }
}
