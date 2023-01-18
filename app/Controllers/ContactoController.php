<?php

namespace App\Controllers;

class ContactoController extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Contacto';
        $datos = [ 
            'nombre' => 'Samuel Elias Paredes',
            'edad' => 19,
            'cumpleanios' => Date("15/02/2003")
         ];
        
        return view('Templates/header',$data)
                . view('contacto/index', $datos)
                . view('Templates/footer');
    }

    public function getContacto($idPersona){
        $data = [
            'titulo' => 'Contacto Personal'
        ];

        $id = [
            'numero' => $idPersona,
            'nombre' => 'Samuel Elias Paredes',
            'edad' => 19,
            'cumpleanios' => Date("15/02/2003")
        ];
        
        return view('Templates/header',$data)
                . view('contacto/persona',$id);
                // . view('Templates/footer');
    }
}
