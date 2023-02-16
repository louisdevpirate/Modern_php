<?php

require "vendor/autoload.php";

$instance = new App\Calcul();

$resultat = $instance->additionner(3, 4);

var_dump($resultat);

echo 'Hello World !';


