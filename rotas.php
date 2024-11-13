<?php 

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('sistema\Controller');

SimpleRouter::get(URL_SITE, 'SiteController@index');
SimpleRouter::get(URL_SITE .'pokedex', 'PokedexController@index');
SimpleRouter::get(URL_SITE, 'GamesController@index');


SimpleRouter::start();