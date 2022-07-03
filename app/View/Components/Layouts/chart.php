<?php

namespace App\View\Components\layouts;

use Illuminate\View\Component;

class chart extends Component
{

    public $sizeColumn, $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($value, $sizeColumn = '12')
    {
        $this->value = $value;
        $this->sizeColumn = $sizeColumn;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.chart');
    }
}
