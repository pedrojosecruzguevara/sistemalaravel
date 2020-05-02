<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use Storage;

class CorreoController extends Controller
{
    public function index()
    {
    }

    public function crear()
    {
        return view("correo.form_mail");
    }

    public function enviar(Request $request)
    {
        $pathToFile = "";
        $containfile = false;
        if ($request->hasFile('file')) {
            $containfile = true;
            $file = $request->file('file');
            $nombre = $file->getClientOriginalName();
            $pathToFile = storage_path('app') . "/" . $nombre;
        }

        $destinatario = $request->input("destinatario");
        $asunto = $request->input("asunto");
        $contenido = $request->input("contenido_mail");

        $data = array('contenido' => $contenido);
        $r = Mail::send('correo.plantilla_correo', $data, function ($message) use ($asunto, $destinatario,  $containfile, $pathToFile) {
            $message->from('pedroincora@gmail.com', 'pyma');
            $message->to($destinatario)->subject($asunto);
            if ($containfile) {
                $message->attach($pathToFile);
            }
        });

        if ($r) {
            if ($containfile) {
                Storage::disk('local')->delete($nombre);
            }
            return view("mensajes.msj_correcto")->with("msj", "Correo Enviado correctamente");
        } else {
            return view("mensajes.msj_rechazado")->with("msj", "hubo un error vuelva a intentarlo");
        }
    }

    public function store(Request $request)
    {
        if ($request->hasFile('file')) {

            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $nombre = $file->getClientOriginalName();
            $r = Storage::disk('local')->put($nombre,  \File::get($file));
        } else {
            return "no";
        }

        if ($r) {
            return $nombre;
        } else {
            return "error vuelva a intentarlo";
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
