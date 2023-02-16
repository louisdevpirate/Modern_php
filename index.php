<?php

spl_autoload_register(function ($className){

    $className = str_replace("App", "classes", $className);
    $className = str_replace("\\", "/", $className);
    $className .= '.php';

    require_once $className;
});


$instance = new App\Calcul();

$resultat = $instance->additionner(3, 4);

var_dump($resultat);

echo 'Hello World !';


