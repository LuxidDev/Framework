<?php
// Luxid Framework - Web Entry Point

require_once __DIR__ . '/../vendor/autoload.php';

use Luxid\Foundation\Application;
use Luxid\Nova\Compiler;
use Luxid\Nova\ComponentCache;

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

// Load configuration
$config = require_once __DIR__ . '/../config/config.php';

// Configure Nova if available
if (class_exists('Luxid\Nova\Compiler')) {
  $novaConfig = __DIR__ . '/../nova/nova.json';
  if (file_exists($novaConfig)) {
    $novaSettings = json_decode(file_get_contents($novaConfig), true);

    if ($novaSettings['compiler']['cache']['enabled'] ?? false) {
      Compiler::setCachePath($novaSettings['compiler']['cache']['path']);
      Compiler::enableDebug($novaSettings['compiler']['cache']['debug'] ?? false);
    }
  }
}

// Load Nova components
$novaBase = __DIR__ . '/../nova';
$directories = ['components', 'pages', 'layouts'];
foreach ($directories as $dir) {
  $path = $novaBase . '/' . $dir;
  if (is_dir($path)) {
    $files = glob($path . '/*.nova.php');
    foreach ($files as $file) {
      require_once $file;
    }

    // Handle subdirectories (for nested pages)
    $subDirs = glob($path . '/*', GLOB_ONLYDIR);
    foreach ($subDirs as $subDir) {
      $subFiles = glob($subDir . '/*.nova.php');
      foreach ($subFiles as $file) {
        require_once $file;
      }
    }
  }
}

// Load Nova helpers
$helpersPath = $novaBase . '/helpers';
if (is_dir($helpersPath)) {
  $helpers = glob($helpersPath . '/*.php');
  foreach ($helpers as $file) {
    require_once $file;
  }
}

// Create application instance
$app = new Application(dirname(__DIR__), $config);

// Load routes
require_once __DIR__ . '/../routes/web.php';

// Run the application
$app->run();
