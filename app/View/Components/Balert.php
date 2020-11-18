<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Balert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type;
    public $classIcon;
    public $text;
    public function __construct($type,$classIcon,$text)
    {
        $this->type=$type;
        $this->classIcon=$classIcon;
        $this->text=$text;

        
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.balert');
    }
}
