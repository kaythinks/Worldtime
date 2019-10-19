<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Kaythinks\Worldtime\Worldtime;

echo Worldtime::getTime('Lagos');