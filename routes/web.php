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

    $messages = \App\Mensaje::all();
    return view('chat',["messages" => $messages]);
});

Route::post('/chat',function(){

    if(Request::has('user')){
        $user = Request::input('user');
        if(Request::has('msgText')){
            $msgText = Request::input('msgText');
            $messages = new \App\Mensaje();
            $messages->usuario = $user;
            $messages->texto = $msgText;
            $messages->fecha = \Carbon\Carbon::now();
            $messages->save();
            $messages = \App\Mensaje::all();
            return view('chat',['user' => $user,"messages" => $messages]);
        }
    }else{
        $messages = \App\Mensaje::all();
        return view('chat',["messages" => $messages]);
    }


});