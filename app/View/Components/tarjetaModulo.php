<?php

namespace App\View\Components;

use Illuminate\View\Component;

class tarjetaModulo extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $descripcion;
    public $clase;
    public $ruta;

    public function __construct($descripcion,$clase,$ruta)
    {
        
        $this->descripcion=$descripcion;
        $this->clase=$clase;
        $this->ruta=$ruta;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.tarjeta-modulo');
    }
}
