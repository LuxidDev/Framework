<?php

// FrankenPHP worker entry point

use Luxid\FrankenPHP\Adapter;

require_once __DIR__ . '/vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Load configuration
$config = require_once __DIR__ . '/config/config.php';

// Create adapter (boots Luxid once and keeps in memory)
$adapter = new Adapter(__DIR__, $config);

// Return the request handler for FrankenPHP
return $adapter->getHandler();
