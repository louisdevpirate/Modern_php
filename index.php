<?php

use Carbon\Carbon;

require "vendor/autoload.php";

$aujourdhui = Carbon::now();

var_dump($aujourdhui->format('d/m/Y'));


