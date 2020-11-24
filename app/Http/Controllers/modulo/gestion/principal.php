<?php

namespace App\Http\Controllers\modulo\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modulo;
use App\Models\User;
use App\Models\administracion\menu;


class principal extends Controller
{
    public function index(){
     
        $data=$this->obtenerIndicadores();
        return view('modulo.gestion.index',['data'=>$data]);
    }

    private function obtenerIndicadores(){
        $modulos= Modulo::where('activo','S')->count();
        $menus= Menu::count();
        $usuarios=User::count();
        return ['usuarios'=>$usuarios,'modulos'=>$modulos,'menus'=>$menus];
    }
}
