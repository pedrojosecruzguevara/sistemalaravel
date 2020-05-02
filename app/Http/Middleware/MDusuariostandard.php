<?php

namespace App\Http\Middleware;

use Closure;
class MDusuariostandard
{
    public function handle($request, Closure $next)
    {     
        $usuario_actual=\Auth::user();
        if($usuario_actual->tipoUsuario!=2){
         return view("mensajes.msj_rechazado")->with("msj","Esta sección es solo visible para el usuario estandard <br/> Usted aún no ha sido asignado como usuario standard, consulte al administrador del sistema");
        }
        return $next($request);
    }
}
