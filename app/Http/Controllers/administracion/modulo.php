<?php

namespace App\Http\Controllers\administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class modulo extends Controller
{
    public function seleccionar(){
        //dd(auth()->user()->modulos[0]->menus[0]->texto);
        return view('administracion.modulo.seleccionar');
    }
}
