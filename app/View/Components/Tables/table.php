<?php

namespace App\View\Components\Tables;

use Illuminate\View\Component;

class table extends Component
{

    public $headers, $id, $class;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($headers, $id = "table", $class = 'table-striped table-hover')
    {
        $this->headers = $headers;
        $this->id = $id;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tables.table');
    }
}
