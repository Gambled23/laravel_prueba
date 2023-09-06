<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

#Pasar variables por la URL, a tipo se le da un valor predeterminado
Route::get('/contacto/{tipo?}', function ($tipo = null) {
    if ($tipo) {
        dd($tipo);
    }

    $prueba=2;
    return view('contacto')->with(['prueba' => $prueba]); #pasar variable tipo
});

#Si recibe datos por POST (el formulario se envió)
#En la variable $request están los datos enviados
Route::post('/contacto', function (Request $request) {
    #dd($request->all());
    #el metodo dd es un metodo que permite debugear todo lo que esté en la variable $request

    return "Datos enviados correctamente";
});

