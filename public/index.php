<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Hello;

$newDay = new Hello();

echo $newDay->talk();