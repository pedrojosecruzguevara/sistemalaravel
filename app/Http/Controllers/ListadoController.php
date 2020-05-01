<?php

namespace App\Http\Controllers;

use App\User;

class ListadoController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function listado_usuarios()
	{
		$usuarios = User::paginate(10);
		return view('listados.listado_usuarios')->with("usuarios", $usuarios);
	}
}