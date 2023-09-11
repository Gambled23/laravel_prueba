<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\SiteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

#Pasar variables por la URL, a tipo se le da un valor predeterminado
Route::get('/contacto/{tipo?}', function ($tipo = null) {
    #enviar a SiteController.php
    $siteController = new SiteController();
    return $siteController->tipoContacto($tipo);
});

#Si recibe datos por POST (el formulario se envió)
#En la variable $request están los datos enviados
Route::post('/contacto', function (Request $request) {
    #dd($request->all());
    #el metodo dd es un metodo que permite debugear todo lo que esté en la variable $request

    $request->validate([
        'nombre' => 'required',
        'email' => 'required|email',
        'mensaje' => 'required|min:5'
    ]);

    $siteController = new SiteController();
    return $siteController->insertarDatosContacto($request);
});

