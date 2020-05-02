<?php

namespace App\Http\Middleware;

use Closure;

class MDusuarioadmin
{
    public function handle($request, Closure $next)
    { 
        $usuario_actual=\Auth::user();
        if($usuario_actual->tipoUsuario!=1){
         return view("mensajes.msj_rechazado")->with("msj","No tiene suficientes Privilegios para acceder a esta sección");
        }
        return $next($request);
    }
}
