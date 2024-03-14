<?php

namespace App\Controllers;
//Controlador base que tem um metodo que rotorna a view Helcome menssage 
class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}
