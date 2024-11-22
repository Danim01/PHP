<?php

use App\Http\Controllers\ControladorAnimal;
use App\Http\Controllers\ControladorCliente;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [ControladorCliente::class, 'control']);
Route::get('/details', [ControladorCliente::class, 'cedula']);

// Route::get('/users', function () {
//     return '<h1> Nueva Ruta Usuarios<h1>';
// });

// Route::get('clientes/{id}', function ($id) {
//     return 'Mi identificacion es: '.$id;
// });