<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class validaPermisoModulo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $moduloUrl=$request->route()->uri;
        if(auth()->user())
        {
            $modulosConPermiso=auth()->user()->modulos;
            $bandera=false;
            for ($i=0;$i<count($modulosConPermiso);$i++)
            {
                if ($moduloUrl==$modulosConPermiso[$i]->ruta){
                    $bandera=true;
                    auth()->user()->modulo_actual_id=$modulosConPermiso[$i]->id;
                    auth()->user()->modulo_actual_descripcion=$modulosConPermiso[$i]->descripcion;
                }
            }

            return ($bandera)? $next($request):redirect('dashboard');
        }
        else
            return redirect('/login');
        
    }
}
