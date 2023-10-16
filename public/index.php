<?php

require __DIR__ . '/../src/Hello.php';

use App\Hello;

$newDay = new Hello();

echo $newDay->talk();