<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mensajes',function(){

    $mensajes = new \App\Mensaje();
    $mensajes->usuario = 'lsanmartin';
    $mensajes->texto = 'Hola mundo';
    $mensajes->fecha = \Carbon\Carbon::now();
    $mensajes->save();
    $mensajes = \App\Mensaje::all();

    return view('welcome');
});
Route::get('/chat',function(){

    $messages = new \App\Mensaje();
    $messages->usuario = 'lsanmartin';
    $messages->texto = 'Hola mundo';
    $messages->fecha = \Carbon\Carbon::now();
    $user = $messages->usuario;
    $messages->save();
    $messages = \App\Mensaje::all();
    return view('chat',['user' => $user,"messages" => $messages]);
});
