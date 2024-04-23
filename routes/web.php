<?php

use lib\Route;

Route::get('/', function(){
    echo 'Hola desde la pagina principal';
});

Route::get('/contact', function(){
    echo 'Hola desde la pagina de contacto';
});

Route::get('/about', function(){
    echo 'Hola desde la pagina de about';
});

Route::get('/user/:id', function(){
    echo 'Hola desde la pagina de usuario';
});

Route::dispatch();
