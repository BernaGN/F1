<?php

namespace App\View\Components\modals;

use Illuminate\View\Component;

class confirm extends Component
{

    public $text, $idButton, $idModal;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text, $idButton = 'button', $idModal = 'confirm')
    {
        $this->text = $text;
        $this->idButton = $idButton;
        $this->idModal = $idModal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modals.confirm');
    }
}
