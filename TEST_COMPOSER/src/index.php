<?php

use Mherferd\TestComposer\test;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('C:\Users\DAW_M\Documents\DWES_M\PHP\TEST_COMPOSER\your.log', Level::Warning));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

$test = new test(); 
$test->hi();