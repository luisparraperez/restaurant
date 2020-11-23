<?php

namespace App\Http\Controllers\modulo\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class principal extends Controller
{
    public function index(){
        $vista=view('modulo.gestion.index');
        return view('administracion.masterModulo',['vista'=>$vista]);
    }
}
