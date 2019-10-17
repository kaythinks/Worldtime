<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Worldtime\Worldtime;

echo Worldtime::getTime('New York');