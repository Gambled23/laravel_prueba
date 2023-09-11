<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function tipoContacto($tipo=null){
        if ($tipo) {
            dd($tipo);
        }
    
        $prueba=2;
        return view('contacto')->with(['prueba' => $prueba]); #pasar variable tipo
    }

    public function insertarDatosContacto($request){
        $contact= new \App\Models\Contact(); #crear un objeto de tipo Contacto
        $contact->nombre=$request->nombre;
        $contact->email=$request->email;
        $contact->mensaje=$request->mensaje;
        $contact->save(); #guardar en la base de datos
        return "Datos enviados correctamente";
    }
}
