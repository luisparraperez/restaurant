<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ValidaTipoUsuario
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
        if(auth()->user()->tipo_usuarios_id==Config::get('constants.TIPO_USUARIOS_CLIENTE')){
            return redirect('/cliente');
        }
        return $next($request);
    }
}
