<?php

namespace App\Controllers;

class HomeController{
    public function index(){
        return [
            'title' => 'Inicio',
            'message' => 'Hola desde la pagina de inicio'
        ];
    }
}