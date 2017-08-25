<?php
require_once __DIR__.'/vendor/autoload.php';
 
 $app = new Silex\Application();
 
 
 $app->get('/clima', function() use($app){ 
 
 $arreglo = ['Nombre: Juan Manuel Miranda Díaz' =>'Cuenta: 415020309'];
     return $app->json($arreglo); 
	 
});
 
 
 $app->run();