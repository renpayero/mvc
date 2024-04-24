<?php

use lib\Route;
use App\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/contact', function(){
    return 'Hola desde la pagina de contacto';
});

Route::get('/about', function(){
    return 'Hola desde la pagina de about';
});

// el orden importa en las rutas porque se ejecutan de arriba hacia abajo
Route::get('/users/perfil', function(){
    return 'Hola desde la pagina de perfil';
});

Route::get('/users/:name', function($name){
    return 'El usuario es ' . $name;
});


Route::dispatch();
