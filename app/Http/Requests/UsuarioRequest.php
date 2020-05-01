<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Redirect;

class UsuarioRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombres' => 'required',
            'apellidos' => 'required',
            'pais' =>   'required',
            'ciudad' => 'required|Alpha',
            'institucion' => 'required|Alpha',
            'ocupacion' => 'required|Alpha',
            'tipousuario' => 'required|Numeric|min:1|max:2',
        ];
    }

    public function messages()
    {
        return [
            'nombres.required' =>  'Ingresar Nombres es obligatorio',
            'apellidos.required' =>  'Ingresar Apellidos es obligatorio',
            'pais.required' =>  'el pais es un campo obligatorio',
            'ciudad.required' =>  'Ingresar una ciudad es obligatorio',
            'ciudad.alpha' =>  'la ciudad no puede contener numeros en su nombre',
            'email.required' =>  'Ingresar un email es obligatorio',
            'email.email' =>  'el email debe tener un formato valido',
            'institucion.required' =>  'Ingresar una institucion es obligatorio',
            'ocupacion.required' =>  'Ingresar la ocupacion es obligatorio',
            'tipousuario.numeric' =>  'Ingresar un tipo de usuario valido ides entre 1 y 2',
        ];
    }

    /**
     * Get the proper failed validation response for the request.
     *
     * @param  array  $errors
     * @return \Symfony\Component\HttpFoundation\Response
     
    public function response(array $errors)
    {        
        return Redirect::to("/mostrar_errores")
                                        ->withInput($this->except($this->dontFlash))
                                        ->withErrors($errors, $this->errorBag);
    }
     */
}