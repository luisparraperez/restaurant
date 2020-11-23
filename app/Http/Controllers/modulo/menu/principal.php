<?php

namespace App\Http\Controllers\modulo\menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class principal extends Controller
{
    public function index(){
        return view('administracion.masterModulo');
    }
}
