<?php 

namespace sistema\Controller;

use sistema\Nucleo\Controlador;

class SiteController extends Controlador
{
    public function __construct()
    {   
        parent::__construct('templates/site/views/principal');
    }

    public function index() : void
    {
        echo $this->template->renderizar('index.html', [
            'subtitulo' => 'teste de subtitulo'
        ]);
    }
}


