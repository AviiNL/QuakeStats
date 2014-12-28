<?php
require __DIR__ . '/vendor/autoload.php';

use CC\QuakeParser\Parser;

// error_reporting(0);

$p = new Parser(__DIR__ . '/freeze.log');


foreach($p as $t)
{
    if ($t instanceof CC\QuakeParser\Type\InitGameType) {
        print_r($t->getMapname());
        echo PHP_EOL;
    }
}