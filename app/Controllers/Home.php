<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Bienvenido a CodeIgniter4!';
        return view('welcome_message',$data);
    }

    public function contacto(){
        $data['titulo']='Contacto';
        return view('Templates/header', $data)
                . view('contacto')
                . view('Templates/footer');
    }
}
