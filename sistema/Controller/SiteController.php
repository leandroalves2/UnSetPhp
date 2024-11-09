<?php 

namespace sistema\Controller;

use sistema\Nucleo\Controlador;

class SiteController extends Controlador
{

    public function __construct()
    {   
        parent::__construct('templates/site/views');
    }

    public function index() : void
    {
        echo $this->template->renderizar('index.html', [
            'titulo' => 'Bem vindo ao meu teste',
            'subtitulo' => 'teste de subtitulo'
        ]);
    }

    public function sobre() : void
    {
        echo 'Sobre mim';
    }
}


