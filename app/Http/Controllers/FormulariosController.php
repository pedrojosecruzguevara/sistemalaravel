<?php namespace App\Http\Controllers;

class FormulariosController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	//presenta el formulario para nuevo usuario
	public function form_nuevo_usuario()
	{
		return view('formularios.form_nuevo_usuario');
	}

}