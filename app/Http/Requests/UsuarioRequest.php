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
            'telefono' => 'required|Numeric|min:10|max:15',
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
            'pais.required' =>  'El país es un campo obligatorio',
            'ciudad.required' =>  'Ingresar una ciudad es obligatorio',
            'ciudad.alpha' =>  'La ciudad no puede contener números en su nombre',
            'email.required' =>  'Ingresar un email es obligatorio',
            'email.email' =>  'El email debe tener un formato válido',
            'telefono.required' =>  'Ingresar un teléfono es obligatorio',
            'institucion.required' =>  'Ingresar una institución es obligatorio',
            'ocupacion.required' =>  'Ingresar la ocupación es obligatorio',
            'tipousuario.numeric' =>  'Ingresar un tipo de usuario válido ides entre 1 y 2',
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