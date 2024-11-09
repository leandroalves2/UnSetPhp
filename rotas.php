<?php 

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('sistema\Controller');

SimpleRouter::get(URL_SITE, 'SiteController@index');
SimpleRouter::get(URL_SITE, 'SobreController@index');

SimpleRouter::start();