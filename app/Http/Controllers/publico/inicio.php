<?php

namespace App\Http\Controllers\publico;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class inicio extends Controller
{
    //

    public function index(){

        $platos=array();
        $platos[]=['nombre'=>'Cerdo con Agregado','descripcion'=>'Pulpa de Cerdo con papas mayo o arroz o fideos.','precio'=>number_format(3000,0,'','.')];
        $platos[]=['nombre'=>'Longaniza con Agregado','descripcion'=>'Longaniza con papas mayo o arroz o fideos.','precio'=>number_format(3000,0,'','.')];
        $platos[]=['nombre'=>'Chuleta con Agregado','descripcion'=>'Chuleta con  papas mayo o arroz o fideos.','precio'=>number_format(3000,0,'','.')];
        $platos[]=['nombre'=>'Vacuno con Agregado','descripcion'=>'Bistec de vacuno con  papas mayo o arroz o fideos.','precio'=>number_format(3500,0,'','.')];
        $platos[]=['nombre'=>'Ensalada Individual','descripcion'=>'','precio'=>number_format(800,0,'','.')];
        $platos[]=['nombre'=>'Huevos c/u','descripcion'=>'','precio'=>number_format(300,0,'','.')];


        return view('publico.inicio.index',['app'=>env('APP_NAME'),'platos'=>$platos]);
    }
}
