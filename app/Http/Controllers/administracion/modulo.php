<?php

namespace App\Http\Controllers\administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class modulo extends Controller
{
    public function seleccionar(){
        return view('administracion.modulo.seleccionar');
    }
}
