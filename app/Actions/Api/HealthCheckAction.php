<?php

namespace App\Actions\Api;

use App\Actions\LuxidAction;
use Luxid\Nodes\Response;

class HealthCheckAction extends LuxidAction
{
  public function index()
  {
    return Response::json([
      'status' => 'healthy',
      'timestamp' => date('Y-m-d H:i:s'),
      'framework' => 'Luxid',
      'version' => '0.5.0'
    ]);
  }
}
