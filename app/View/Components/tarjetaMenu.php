<?php

namespace App\View\Components;

use Illuminate\View\Component;

class tarjetaMenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $texto;
    public $color;
    public $icono;
    public function __construct($texto,$color,$icono)
    {
        $this->texto=$texto;
        $this->color=$color;
        $this->icono=$icono;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.tarjeta-menu');
    }
}
