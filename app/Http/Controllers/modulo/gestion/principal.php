<?php

namespace App\Http\Controllers\modulo\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class principal extends Controller
{
    public function index(){
        $data=['usuarios'=>50,'modulos'=>77,'menus'=>100];
        return view('modulo.gestion.index',['data'=>$data]);
    }
}
