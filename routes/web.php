<?php

use lib\Route;

Route::get('/', function(){
    return [
        'title' => 'Inicio',
        'message' => 'Hola desde la pagina de inicio'
    ];
});

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
