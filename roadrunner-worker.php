<?php

use Luxid\RoadRunner\Adapter;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = require_once __DIR__ . '/config/config.php';

$adapter = new Adapter(__DIR__, $config);
$adapter->run();
