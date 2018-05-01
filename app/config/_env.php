<?php

define('BASE_PATH', realpath(__DIR__.'/../../'));


require_once __DIR__.'/../../vendor/autoload.php';

$dotENV = new \Dotenv\Dotenv(BASE_PATH);
$dotENV->load();
