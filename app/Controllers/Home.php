<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $pagina = view("web/cabecera") . view("web/carrosel") . view("web/catmes") . view("web/destacados") . view("web/pie");
        return $pagina;

        return view('welcome_message');
    }
}
