<?php 

namespace sistema\Controller;

use sistema\Nucleo\Controlador;

class PokedexController extends Controlador
{
    public function __construct()
{
    parent::__construct('templates/site/views/pokedex');
}
    
    public function index() : void
    {
        echo $this->template->renderizar('index.html', [
            'titulo' => 'teste de subtitulo'
        ]);
    }


}